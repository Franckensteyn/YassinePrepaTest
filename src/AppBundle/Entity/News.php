<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * News
 *
 * @ORM\Table(name="news", indexes={@ORM\Index(name="fk_news_fos_user_idx", columns={"fosUserId"})})
 * @ORM\Entity
 */
class News
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=120, nullable=true)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="text", length=65535, nullable=true)
     */
    private $texte;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="temps", type="datetime", nullable=true)
     */
    private $temps;

    /**
     * @var \FosUser
     *
     * @ORM\ManyToOne(targetEntity="FosUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fosUserId", referencedColumnName="id")
     * })
     */
    private $fosuserid;


}

