<?php
namespace Classes;

class Ecole
{
    private string $nom;
    private string $adresse;
    private int $effectif;
    private string $directeur;
    private array $classes;
    
    /**
     * __construct
     *
     * @param  string $nom
     * @param  string $adresse
     * @param  int $effectif
     * @param  string $directeur
     * @return void
     */
    public function __construct(string $nom, string $adresse, int $effectif, string $directeur = 'Toto')
    {
        //echo 'Construct !';
        /*$this->setNom($nom);
        $this->setAdresse($adresse);
        $this->setEffectif($effectif);
        $this->setDirecteur($directeur);
        */
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->effectif = $effectif;
        $this->directeur = $directeur;
        $this->classes = [];
    }
    
    /**
     * __destruct
     *
     * @return void
     */
    public function __destruct()
    {
        //echo '<h2>Destruction ' . $this->nom . '</h2>';
    }
    
    /**
     * setNom
     *
     * @param  string $nom
     * @return void
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }
    
    /**
     * getNom
     *
     * @return string
     */
    public function getNom(): string
    {
        return mb_strtoupper($this->nom);
    }
        
    /**
     * setAdresse
     *
     * @param  string $adresse
     * @return void
     */
    public function setAdresse(string $adresse): void
    {
        $this->adresse = $adresse;
    }
    
    /**
     * getAdresse
     *
     * @return string
     */
    public function getAdresse(): string
    {
        return $this->adresse;
    }
    
    /**
     * setEffectif
     *
     * @param  int $effectif
     * @return void
     */
    public function setEffectif(int $effectif): void
    {
        $this->effectif = $effectif;
    }
    
    /**
     * getEffectif
     *
     * @return int
     */
    public function getEffectif(): int
    {
        return $this->effectif;
    }
    
    /**
     * setDirecteur
     *
     * @param  string $directeur
     * @return void
     */
    public function setDirecteur(string $directeur): void
    {
        $this->directeur = $directeur;
        //return true;
    }
    
    /**
     * getDirecteur
     *
     * @return string
     */
    public function getDirecteur(): string
    {
        return $this->directeur;
    }

    /**
     * getClasses
     *
     * @return array
     */
    public function getClasses(): array
    {
        return $this->classes;
    }
    
    /**
     * setClasses
     *
     * @param  array $classes
     * @return void
     */
    public function setClasses(array $classes): void
    {
        $this->classes = $classes;
    }
    
    /**
     * addClass
     *
     * @param  mixed $class
     * @return void
     */
    public function addClass(Classe $class): void
    {
        if (!in_array($class, $this->classes)) {
            $this->classes[] = $class;

            $class->setEcole($this);
        }
    }
}