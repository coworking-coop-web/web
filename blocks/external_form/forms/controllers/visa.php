<?php	
defined('C5_EXECUTE') or die("Access Denied.");
class VisaExternalFormBlockController extends BlockController {
	
	public function on_start() {
		Loader::model('coworking_space','space_search');
		$coworkingSpace = CoworkingSpace::getByID($_REQUEST['csID']);
		if (is_object($coworkingSpace)) {
			$this->set('csID', $coworkingSpace->csID);
			$this->set('spaceName', $coworkingSpace->spaceName);
		}
	}

	public function action_send() {
		$e = Loader::helper('validation/error');
		$th = Loader::helper('text');
		
		// get space info
		Loader::model('coworking_space','space_search');
		$coworkingSpace = CoworkingSpace::getByID($this->post('csID'));
		if (!is_object($coworkingSpace)) {
			$e->add(t("Invalid coworking space id."));
		}
		
		if (!$e->has()) {

			$mh = Loader::helper('mail');
				
			//いったん切っときます $mh->to($coworkingSpace->email);
			$mh->addParameter('spaceName', $coworkingSpace->spaceName);
			
			// get super admin info
			$su = UserInfo::getByID(USER_SUPER_ID);
			if (is_object($su)) {
				$mh->to($su->getUserEmail());
				$mh->from($su->getUserEmail(),SITE);
			}
			
			// get current user info
			$u = new User();
			$uid = $u->getUserID();
			$ui = UserInfo::getByID($uid);
			if (is_object($ui)) {
				$mh->addParameter('eMail', $ui->getUserEMail());
				$mh->AddParameter('name', $ui->getAttribute('name'));
			}
			
			$mh->addParameter('checkin_dt', $th->entities($this->post('checkin_dt')));
			$mh->addParameter('checkin_h', $th->entities($this->post('checkin_h')));
			$mh->addParameter('checkin_m', $th->entities($this->post('checkin_m')));
			$mh->addParameter('checkin_a', $th->entities($this->post('checkin_a')));
			$mh->addParameter('message', $th->entities($this->post('message')));
			
			$mh->load('external_form_visa');
			$mh->sendMail();
			
			$this->set('response', t('Thanks!'));
			
		} else {
			$this->set('error', $e);
		}
		
	}
	
}