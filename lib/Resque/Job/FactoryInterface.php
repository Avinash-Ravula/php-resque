<?php

interface Resque_Job_FactoryInterface
{
	public function create(string $className, array $args, string $queue): Resque_JobInterface;
}
