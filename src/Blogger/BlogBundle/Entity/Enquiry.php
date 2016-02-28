<?php
// src/Blogger/BlogBundle/Entity/Enquiry.php

namespace Blogger\BlogBundle\Entity;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;


class Enquiry
{

protected $email;

protected $subject;

protected $body;


public static function loadValidatorMetadata(ClassMetadata $metadata)
{

$metadata->addPropertyConstraint('email', new Email());

$metadata->addPropertyConstraint('subject', new NotBlank());
$metadata->addPropertyConstraint('subject', new Length(50));

$metadata->addPropertyConstraint('body', new Length(50));
}

public function getEmail()
{
return $this->email;
}

public function setEmail($email)
{
$this->email = $email;
}

public function getSubject()
{
return $this->subject;
}

public function setSubject($subject)
{
$this->subject = $subject;
}

public function getBody()
{
return $this->body;
}

public function setBody($body)
{
$this->body = $body;
}
}