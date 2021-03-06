<?php

/**
 * This file is part of the OpenPNE package.
 * (c) OpenPNE Project (http://www.openpne.jp/)
 *
 * For the full copyright and license information, please view the LICENSE
 * file and the NOTICE file that were distributed with this source code.
 */

/**
 * communityEvent actions.
 *
 * @package    OpenPNE
 * @subpackage action
 * @author     Kousuke Ebihara <ebihara@tejimaya.com>
 */
class communityEventActions extends opCommunityTopicPluginEventActions
{
  /**
   * postExecute
   */
  public function postExecute()
  {
    if ($this->community instanceof Community)
    {
      sfConfig::set('sf_nav_type', 'community');
      sfConfig::set('sf_nav_id', $this->community->getId());
    }
  }

  /**
   * Executes list community.
   *
   * @param sfWebRequest $request
   */
  public function executeListCommunity(sfWebRequest $request)
  {
    $this->size = 10;

    return parent::executeListCommunity($request);
  }

  /**
   * Executes recently event list.
   *
   * @param sfWebRequest $request
   */
  public function executeRecentlyEventList(sfWebRequest $request)
  {
    $this->size = 10;

    return parent::executeRecentlyEventList($request);
  }
}
