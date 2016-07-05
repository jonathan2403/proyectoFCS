<?php

class ExampleThread extends Thread{

	public function __construct($i){
		$this->i = $i;
	}

	public function run(){
		while(true){
			echo $this->i;
			sleep(1);
		}
	} // final run

}