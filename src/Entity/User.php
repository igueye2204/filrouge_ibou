<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserRepository;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @ApiResource(
 *  collectionOperations = {
 * 
 *  "get_apprenants"={
 *    "method"="GET",
 *    "path"="/apprenants" ,
 *    "normalization_context"={"groups":"apprenant:read"},
 *    "access_control"="(is_granted('ROLE_APPRENANT') or is_granted('ROLE_CM'))",
 *    "access_control_message"="Vous n'avez pas access à cette Ressource",
 *    "route_name"="apprenant_liste",
 *
 *   },
 * "get_formateurs"={
 *    "method"="GET",
 *    "path"="/formateurs" ,
 *    "normalization_context"={"groups":"formateur:read"},
 *    "access_control"="(is_granted('ROLE_CM'))",
 *    "access_control_message"="Vous n'avez pas access à cette Ressource",
 *    "route_name"="formateurs_liste",
 *
 *   }
 * 
 *  },
 *  itemOperations = {
 * 
 *   "get_apprenants"={
 *       "method"="GET",
 *       "path"="/apprenants/{id}" ,
 *      "access_control"="(is_granted('ROLE_CM'))",
 *      "access_control_message"="Vous n'avez pas access à cette Ressource",
 *       },
 *  "get_formateurs"={
 *       "method"="GET",
 *       "path"="/formateurs/{id}" ,
 *      "access_control"="(is_granted('ROLE_CM'))",
 *      "access_control_message"="Vous n'avez pas access à cette Ressource",
 * 
 *       },
 * "put_apprenants"={
 *       "method"="PUT",
 *       "path"="/apprenants/{id}/update" ,
 *      "access_control"="(is_granted('ROLE_APPRENANT'))",
 *      "access_control_message"="Vous n'avez pas access à cette Ressource",
 *       }
 *  }
 * )
 */


class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"apprenant:read"})
     * @Groups({"formateur:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     * @Groups({"apprenant:read"})
     * @Groups({"formateur:read"})
     */
    private $username;

    
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     * @Groups({"apprenant:read"})
     * @Groups({"formateur:read"})
     * @Assert\NotBlank
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=20)
     * @Groups({"apprenant:read"})
     * @Groups({"formateur:read"})
     */
    private $nom;

    /**
     * @ORM\Column(type="text")
     * @Groups({"apprenant:read"})
     * @Groups({"formateur:read"})
     */
    private $email;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @Groups({"apprenant:read"})
     * @Groups({"formateur:read"})
     */
    private $avatar;

    /**
     * @ORM\ManyToOne(targetEntity=Profil::class, inversedBy="users")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"apprenant:read"})
     * @Groups({"formateur:read"})
     */
    private $profil;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_'.$this->profil->getLibelle();

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    public function setAvatar(?string $avatar): self
    {
        $this->avatar = $avatar;

        return $this;
    }

    public function getProfil(): ?Profil
    {
        return $this->profil;
    }

    public function setProfil(?Profil $profil): self
    {
        $this->profil = $profil;

        return $this;
    }
}
