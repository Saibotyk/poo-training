<?php
class Pupil {
    private string $name;
    private string $firstName;
    private DateTime $birthdate;
    private string $schoolClass;
    private string $school;

    public function __construct(string $name, string $firstname, DateTime $birthdate, string $schoolClass, string $school)
    {
        $this->name = $name;
        $this->firstName = $firstname;
        $this->birthdate = $birthdate;
        $this->schoolClass = $schoolClass;
        $this->school = $school;
    }

    public function __toString(): string
    {
        return "Bonjour, je m'appelle " . $this->name . ' ' . $this->firstName . ",  j'ai " . $this->getAge() . ' ans, et je vais à l\'école ' . $this->school . " en classe de " . $this->schoolClass . '.'; 
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setFirstName(string $firstname): void
    {
        $this->firstName = $firstname;
    }

    public function setBirthdate(string $birthdate): void
    {
        $this->birthdate = $birthdate;
    }

    public function setSchoolClass(string $schoolClass): void
    {
        $this->schoolClass = $schoolClass;
    }

    public function setSchool(string $school): void
    {
        $this->school = $school;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getBirthdate(): DateTime
    {
        return $this->birthdate;
    }

    public function getSchoolClass(): string
    {
        return $this->schoolClass;
    }

    public function getSchool(): string
    {
        return $this->school;
    }

    public function getAge(): int
    {
        $dateNow = new DateTime;
        $age = $this->birthdate->diff($dateNow);
        return $age->y;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>POO - Des élèves</title>
</head>

<body class="dark-template">
    <div class="container">
        <header class="header">
            <h1 class="main-ttl">Programmation Orientée Objet - Des élèves</h1>
            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li><a href="index.php" class="main-nav-link active">Des élèves</a></li>
                    <li><a href="exo2.php" class="main-nav-link">Des profs</a></li>
                    <li><a href="exo3.php" class="main-nav-link">On s'organise</a></li>
                    <li><a href="exo4.php" class="main-nav-link">Des écoles</a></li>
                    <li><a href="exo5.php" class="main-nav-link">Des vues</a></li>
                </ul>
            </nav>
        </header>
        
        <!-- QUESTION 1 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 1</h2>
            <p class="exercice-txt">
                Créer une classe permettant de créer des élèves ayant un nom, un prénom, un age et un niveau scolaire.
                <br>
                Définir toutes les propriétés à l'instanciation.
                <br>
                Créer 2 étudiants différents.

            </p>
            <div class="exercice-sandbox">
            <?php
                $pupil1 = new Pupil('DOBOSZEWICZ', 'Tobias', new DateTime('1995-01-20'), 'DWWM', 'Créative');
                $pupil2 = new Pupil('MARTIN', 'Michel', new DateTime('2011-08-14'), '5éme', 'Collége Marie-Curie');

                var_dump($pupil1);
                var_dump($pupil2);
                
                ?>
            </div>
        </section>
        
        <!-- QUESTION 2 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 2</h2>
            <p class="exercice-txt">
                Créer les getters et les setters permettant de manipuler toutes les propriétés des élèves.
                <br>
                Modifier le niveau scolaire des 2 élèves et les afficher.
            </p>
            <div class="exercice-sandbox">
                <?php
                    $pupil1->setSchoolClass('CDA');
                    $pupil2->setSchoolClass('4éme');

                    var_dump($pupil1->getSchoolClass());
                    var_dump($pupil2->getSchoolClass());
                ?>
            </div>
        </section>
        
        <!-- QUESTION 3 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 3</h2>
            <p class="exercice-txt">
                Remplacer la propriété d'âge par la date de naissance de l'élève.
                <br>
                Mettez à jour l'instanciation des 2 élèves et afficher leur date de naissance.
            </p>
            <div class="exercice-sandbox">
                <?php
                    var_dump($pupil1->getBirthdate());
                    var_dump($pupil2->getBirthdate());
                ?>
            </div>
        </section>
        
        <!-- QUESTION 4 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 4</h2>
            <p class="exercice-txt">
                Donner la possibilité aux élèves de donner leur âge.
                <br>
                Afficher l'âge des 2 élèves.
            </p>
            <div class="exercice-sandbox">
            <?php
                    var_dump($pupil1->getAge());
                    var_dump($pupil2->getAge());
                ?>
            </div>
        </section>
        
        <!-- QUESTION 5 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 5</h2>
            <p class="exercice-txt">
                On veut aussi savoir le nom de l'école où va un élève.
                <br>
                Ajouter la propriété et ajouter la donnée sur les élèves.
            </p>
            <div class="exercice-sandbox">
                <?php
                    var_dump($pupil1->getSchool());
                    var_dump($pupil2->getSchool());
                ?>
            </div>
        </section>
        
        <!-- QUESTION 6 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 6</h2>
            <p class="exercice-txt">
                Donner la possibilité aux élèves de se présenter en affichant la phrase suivante :<br>
                "Bonjour, je m'appelle XXX XXX, j'ai XX ans et je vais à l'école XXX en class de XXX.".
                <br>
                Afficher la phrase de présentation des 2 élèves.
            </p>
            <div class="exercice-sandbox">
            <?php
                    echo $pupil1 . "</br>";
                    echo $pupil2;
                ?>
            </div>
        </section>

    </div>
    <div class="copyright">© Guillaume Belleuvre, 2023 - DWWM</div>
</body>
</html>