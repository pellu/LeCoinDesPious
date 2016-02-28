<?php

/*
 * This file is part of the Symfony framework.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Sensio\Bundle\FrameworkExtraBundle\EventListener;

use Symfony\Component\DependencyInjection\ContainerInterface;
<<<<<<< HEAD
use Symfony\Component\HttpFoundation\Request;
=======
>>>>>>> 500105b5d4a2f80fc13e57344d0ab3570f4029e5
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\HttpKernel\Event\GetResponseForControllerResultEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
<<<<<<< HEAD
 * Handles the Template annotation for actions.
 *
 * Depends on pre-processing of the ControllerListener.
=======
 * The TemplateListener class handles the Template annotation.
>>>>>>> 500105b5d4a2f80fc13e57344d0ab3570f4029e5
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TemplateListener implements EventSubscriberInterface
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    /**
     * Constructor.
     *
     * @param ContainerInterface $container The service container instance
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * Guesses the template name to render and its variables and adds them to
     * the request object.
     *
     * @param FilterControllerEvent $event A FilterControllerEvent instance
     */
    public function onKernelController(FilterControllerEvent $event)
    {
<<<<<<< HEAD
        $request = $event->getRequest();
        $template = $request->attributes->get('_template');

        // no @Template present
        if (null === $template) {
            return;
        }

        // we need the @Template annotation object or we cannot continue
        if (!$template instanceof Template) {
            throw new \InvalidArgumentException('Request attribute "_template" is reserved for @Template annotations.');
        }

        $template->setOwner($event->getController());
=======
        if (!is_array($controller = $event->getController())) {
            return;
        }

        $request = $event->getRequest();

        if (!$configuration = $request->attributes->get('_template')) {
            return;
        }

        if (!$configuration->getTemplate()) {
            $guesser = $this->container->get('sensio_framework_extra.view.guesser');
            $configuration->setTemplate($guesser->guessTemplateName($controller, $request, $configuration->getEngine()));
        }

        $request->attributes->set('_template', $configuration->getTemplate());
        $request->attributes->set('_template_vars', $configuration->getVars());
        $request->attributes->set('_template_streamable', $configuration->isStreamable());

        // all controller method arguments
        if (!$configuration->getVars()) {
            $r = new \ReflectionObject($controller[0]);

            $vars = array();
            foreach ($r->getMethod($controller[1])->getParameters() as $param) {
                $vars[] = $param->getName();
            }

            $request->attributes->set('_template_default_vars', $vars);
        }
>>>>>>> 500105b5d4a2f80fc13e57344d0ab3570f4029e5
    }

    /**
     * Renders the template and initializes a new response object with the
     * rendered template content.
     *
<<<<<<< HEAD
     * @param GetResponseForControllerResultEvent $event
     */
    public function onKernelView(GetResponseForControllerResultEvent $event)
    {
        /* @var Template $template */
        $request = $event->getRequest();
        $template = $request->attributes->get('_template');

        if (null === $template) {
            return;
        }

        $parameters = $event->getControllerResult();
        $owner = $template->getOwner();
        list($controller, $action) = $owner;

        // when no template has been given, try to resolve it based on the controller
        if (null === $template->getTemplate()) {
            if ($action === '__invoke') {
                throw new \InvalidArgumentException(sprintf('Cannot guess a template name for "%s::%s", please provide a template name.', get_class($controller), $action));
            }

            $guesser = $this->container->get('sensio_framework_extra.view.guesser');
            $template->setTemplate($guesser->guessTemplateName($owner, $request, $template->getEngine()));
        }

        // when the annotation declares no default vars and the action returns
        // null, all action method arguments are used as default vars
        if (null === $parameters) {
            $parameters = $this->resolveDefaultParameters($request, $template, $controller, $action);
        }

        // attempt to render the actual response
        $templating = $this->container->get('templating');

        if ($template->isStreamable()) {
            $callback = function () use ($templating, $template, $parameters) {
                return $templating->stream($template->getTemplate(), $parameters);
=======
     * @param GetResponseForControllerResultEvent $event A GetResponseForControllerResultEvent instance
     */
    public function onKernelView(GetResponseForControllerResultEvent $event)
    {
        $request = $event->getRequest();
        $parameters = $event->getControllerResult();

        if (null === $parameters) {
            if (!$vars = $request->attributes->get('_template_vars')) {
                if (!$vars = $request->attributes->get('_template_default_vars')) {
                    return;
                }
            }

            $parameters = array();
            foreach ($vars as $var) {
                $parameters[$var] = $request->attributes->get($var);
            }
        }

        if (!is_array($parameters)) {
            return $parameters;
        }

        if (!$template = $request->attributes->get('_template')) {
            return $parameters;
        }

        $templating = $this->container->get('templating');

        if (!$request->attributes->get('_template_streamable')) {
            $event->setResponse($templating->renderResponse($template, $parameters));
        } else {
            $callback = function () use ($templating, $template, $parameters) {
                return $templating->stream($template, $parameters);
>>>>>>> 500105b5d4a2f80fc13e57344d0ab3570f4029e5
            };

            $event->setResponse(new StreamedResponse($callback));
        }
<<<<<<< HEAD

        $event->setResponse($templating->renderResponse($template->getTemplate(), $parameters));
=======
>>>>>>> 500105b5d4a2f80fc13e57344d0ab3570f4029e5
    }

    public static function getSubscribedEvents()
    {
        return array(
            KernelEvents::CONTROLLER => array('onKernelController', -128),
            KernelEvents::VIEW => 'onKernelView',
        );
    }
<<<<<<< HEAD

    /**
     * @param Request  $request
     * @param Template $template
     * @param object   $controller
     * @param string   $action
     *
     * @return array
     */
    private function resolveDefaultParameters(Request $request, Template $template, $controller, $action)
    {
        $parameters = array();
        $arguments = $template->getVars();

        if (0 === count($arguments)) {
            $r = new \ReflectionObject($controller);

            $arguments = array();
            foreach ($r->getMethod($action)->getParameters() as $param) {
                $arguments[] = $param->getName();
            }
        }

        // fetch the arguments of @Template.vars or everything if desired
        // and assign them to the designated template
        foreach ($arguments as $argument) {
            $parameters[$argument] = $request->attributes->get($argument);
        }

        return $parameters;
    }
=======
>>>>>>> 500105b5d4a2f80fc13e57344d0ab3570f4029e5
}
