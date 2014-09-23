<?php namespace Project\Names;

use Faker\Generator as FakerGenerator;
use Faker\Factory as FakerFactory;

class Factory extends FakerFactory {

	public function create18th($gender)
	{
		$class = "Project\\Names\\$gender";
		$generator = new FakerGenerator();
        $generator->addProvider(new $class($generator));
        return $generator;
	}

}
