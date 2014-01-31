<?php namespace Pattern\Factory;

class SocialWidgetFactory extends SocialFactory {
	
	public function build($type)
	{
		switch ($type) {
			case 'facebook':
				return new FacebookWidget();
			break;
			
			case 'twitter':
				return new TwitterWidget();
			break;
			
			default:
				throw new Exception('Fatory cannot build that!');
			break;
		}
		
	}
	
}