<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $movie = new Movie();
        $movie->setTitle('The Dark Knight');
        $movie->setReleaseYear( 2008 );
        $movie->setDescription('This is the description of the film');
        $movie->setImagePath( 'https://cdn.pixabay.com/photo/2023/03/14/21/53/sculpture-7853242_960_720.jpg' );

        $movie->addActor( $this->getReference( "actor_1" ) );
        $movie->addActor( $this->getReference( "actor_2" ) );

        $manager->persist($movie);


        $movie1 = new Movie();
        $movie1->setTitle('Avengers: Endgame');
        $movie1->setReleaseYear( 2019 );
        $movie1->setDescription('This is the description of the film');
        $movie1->setImagePath( 'https://cdn.pixabay.com/photo/2017/07/19/17/26/gabriel-2519793_960_720.jpg' );

        $movie1->addActor( $this->getReference( "actor_3" ) );
        $movie1->addActor( $this->getReference( "actor_4" ) );

        $manager->persist($movie1);

        $manager->flush();

    }
}
