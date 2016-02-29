<?php
namespace Craft;

class Wistia_VideosController extends BaseController
{
	public function actionGetModal($projectIds = '*')
	{
		$this->requireAjaxRequest();

		if ($projectIds != '*') {
			$projectIds = explode(',', $projectIds);
		}

		return $this->renderTemplate('wistia/fieldtype/modal', array(
			'videos' => craft()->wistia_videos->getVideosByProjectId($projectIds)
		));
	}
}