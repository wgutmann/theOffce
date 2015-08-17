<?php
	Class Episode{

		private $id = '';
		private $season = '';
		private $episode = '';
		private $title = '';
		private $category = '';
		private $description = '';

		function __construct($id, $season, $episode, $title, $category, $description)
		{
			$this->id = $id;
			$this->season = $season;
			$this->episode = $episode;
			$this->title = $title;
			$this->category = $category;
			$this->description = $description;
		}
		function getId(){
			return $this->id;
		}
		function getSeason(){
			return $this->season;
		}
		function getEpisode(){
			return $this->episode;
		}
		function getTitle()	{
			return $this->title;
		}
		function getDescription(){
			return $this->description;
		}
		function getCategory(){
			return $this->category;
		}
	}
?>