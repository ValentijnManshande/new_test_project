<?php


namespace App\Form\Model;


use App\Validator\UniqueUser;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

class UserRegistrationFormModel
{
    /**
    * @Assert\NotBlank(message="Please enter an email")
    * @Assert\Email()
     * @UniqueUser()
     */
    public $email;

    /**
     * @Assert\NotBlank(message="Choose a password!")
     * @Assert\Length(min=5, minMessage="Think of something longer, please!")
     */
    public $plainPassWord;

    /**
     * @Assert\IsTrue(message="I know it is silly, but you must agree to our terms!")
     */
    public $agreeTerms;
}