<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Hub plugin related strings
 * @package   localhub
 * @copyright 2010 Moodle Pty Ltd (http://moodle.com)
 * @author    Jerome Mouneyrac
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['activities'] = 'Activities';
$string['additionaldesc'] = 'Courses: {$a->courses} - Users: {$a->users} - Enrolments: {$a->enrolments} - Resources: {$a->resources} - Posts: {$a->posts}
    - Questions: {$a->questions} - Average number of participants: {$a->participantnumberaverage} - Average number of course modules: {$a->modulenumberaverage}';
$string['additionalcoursedesc'] = 'Language: {$a->lang} - Creator: {$a->creatorname} - Publisher: {$a->publishername} - Subject: {$a->subject}
    - Audience: {$a->audience} - Educational level: {$a->educationallevel}';
$string['additionaladmindesc'] = 'Registered: {$a->timeregistered} - Modified: {$a->timemodified} - Privacy: {$a->privacy} -
    Contactable: {$a->contactable} - Email: {$a->emailalert}';
$string['additionalcourseadmindesc'] = 'Time modified: {$a->timemodified} -
    Short name: {$a->shortname}';
$string['allowglobalsearch'] = 'Publish this hub and allow global search of all courses';
$string['allowpublicsearch'] = 'Publish this hub so people can join it';
$string['audience'] = 'Designed for';
$string['audience_help'] = 'What kind of course are you looking for?  As well as traditional courses intended for students, you might search for communities of Educators or Moodle Administrators';
$string['audienceeducators'] = 'Educators';
$string['audiencestudents'] = 'Students';
$string['audienceadmins'] = 'Moodle Administrators';
$string['badurlformat'] = 'Bad URL format';
$string['blocks'] = 'Blocks';
$string['bulkdelete'] = 'Delete';
$string['bulknotvisible'] = 'Make not visible';
$string['bulkoperation'] = 'Select';
$string['bulkoperationperform'] = 'Perform';
$string['bulkselectoperation'] = 'With selected courses...';
$string['bulkvisible'] = 'Make visible';
$string['cannotregisternotavailablesite'] = 'This hub cannot access your web site.';
$string['cannotregisterprivatehub'] = 'You cannot register your hub. Change the Privacy setting.';
$string['cannotsetpasswordforpublichub'] = 'Cannot set a password for public hub. Either delete your password, either set the hub as private.';
$string['community'] = 'Community';
$string['confirmbulkdelete'] = 'Bulk delete confirmation';
$string['confirmbulkvisible'] = 'Bulk visible confirmation';
$string['confirmbulknotvisible'] = 'Bulk invisible confirmation';
$string['confirmmessagebulkdelete'] = 'Are you sure you want to delete the following courses:';
$string['confirmmessagebulkvisible'] = 'Are you sure you want to the following courses visible:';
$string['confirmmessagebulknotvisible'] = 'Are you sure you want to make the following courses invisible:';
$string['confirmregistration'] = 'Confirm registration';
$string['confirmforceunregistration'] = 'Any existing information will not be modified on the hub directory. Are you sure you want to force unregistration?';
$string['confirmunregistration'] = 'Are you sure you want to unregister from the hub directory?';
$string['contactemail'] = 'Contact email';
$string['contactemail_help'] = 'The contact email is the email that the hub directory administrator will use to contact the hub administrator for any important issues.';
$string['contactname'] = 'Contact name';
$string['contactname_help'] = 'The hub administrator is the person that the hub directory administrator will try to contact about any important issues.';
$string['contributornames'] = 'Contributor names';
$string['contributors'] = 'Contributors: {$a}';
$string['country'] = 'Country';
$string['country_help'] = 'Display only sites from the selected country.';
$string['coursedesc'] = 'Description';
$string['courselang'] = 'Language';
$string['coursemap'] = 'Course map';
$string['coursename'] = 'Name';
$string['courseprivate'] = 'Private';
$string['coursepublic'] = 'Public';
$string['coursepublished'] = 'Course published';
$string['courseshortname'] = 'Shortname';
$string['coursesnumber'] = 'Number of courses ({$a})';
$string['coverage'] = 'Coverage: {$a}';
$string['creatorname'] = 'Creator name';
$string['creatornotes'] = 'Creator notes';
$string['deleteconfirmation'] = 'The site administrator will be sent an email explaining how he can unregister his site.';
$string['deletecourseconfirmation'] = 'Are you sure to delete the {$a} course ?';
$string['deleterelatedcourseslink'] = 'related courses';
$string['deletesite'] = 'Unregister {$a}';
$string['unregistersite'] = 'Unregister the site';
$string['unregistersiteandcourses'] = 'Unregister the site and all courses';
$string['demourl'] = 'Demo URL';
$string['description'] = 'Description';
$string['description_help'] = 'The hub description will always appear on the hub directory.';
$string['donotdeleteormodify'] = 'DO NOT DELETE OR MODIFY THIS USER !';
$string['downloadable'] = 'courses I can download';
$string['educationallevel'] = 'Educational level';
$string['educationallevel_help'] = 'What educational level are you searching for?  In the case of communities of educators, this level describes the level they are teaching.';
$string['edulevelassociation'] = 'Association';
$string['edulevelcorporate'] = 'Corporate';
$string['edulevelgovernment'] = 'Government';
$string['edulevelother'] = 'Other';
$string['edulevelprimary'] = 'Primary';
$string['edulevelsecondary'] = 'Secondary';
$string['eduleveltertiary'] = 'Tertiary';
$string['emailmessagesiteadded'] = 'A new site just registered with the hub at {$a->huburl}
    
Name: {$a->name}
URL: {$a->url}
Admin: {$a->contactname} ({$a->contactemail})
Language: {$a->language}

To manage registered sites, go to: {$a->managesiteurl}
';
$string['emailmessagesitedeleted'] = '{$a->sitename} at {$a->siteurl} has just been deleted from the {$a->hubname} hub at {$a->huburl}.

A {$a->hubname} administrator deleted {$a->sitename} from the hub database. If you are allowed and want to register a new time on the hub, you will need first to force unregister from this hub. Please go to {$a->unregisterpagelink} on {$a->sitename}.
';
$string['emailmessagesiteupdated'] = '{$a->name} just updated registration with the hub at {$a->huburl}

Name: {$a->name}
URL: {$a->url}
Admin: {$a->contactname} ({$a->contactemail})
Language: {$a->language}

To manage registered sites, go to: {$a->managesiteurl}
';
$string['emailmessagesiteurlchanged'] = '{$a->name} site has been updated. (previous name: {$a->oldname})
Its new url {$a->url} has been updated from ({$a->oldurl}).';
$string['emailtitlesiteadded'] = '{$a} site has been added to the hub';
$string['emailtitlesitedeleted'] = '{$a->sitename} has been deleted from a hub';
$string['emailtitlesiteupdated'] = '{$a} site has been updated on the hub';
$string['emailtitlesiteurlchanged'] = '{$a} site has changed his url (please check it).';
$string['enabled'] = 'Enabled';
$string['enabled_help'] = 'You can enabled/disabled the hub server.';
$string['enrollable'] = 'courses I can enrol in';
$string['enroldownload'] = 'Find';
$string['enroldownload_help'] = 'Some courses listed in this directory are being advertised so that people can come and participate in them on the original site.

Others are course templates provided for you to download and use on your own Moodle site.';
$string['errorbadimageheightwidth'] = 'The image should have a maximum size of {$a->width} X {$a->height}';
$string['errorlangnotrecognized'] = 'Language code is unknown by Moodle. Please contact {$a}';
$string['errorregistration'] = 'An error occured during registration, please try again later. ({$a})';
$string['errorunregistration'] = 'An error occurred during hub unregistration, try again later. ({$a})';
$string['errorwrongpostdata'] = 'Some POST data are missing, please use the Moodle registration form.';
$string['hideguestbutton'] = 'Moodle changed the option \'Guest login button\' to the value \'Hide\'.';
$string['hub'] = 'Hub';
$string['hubdetails'] = 'Hub details';
$string['hubimage'] = 'Image';
$string['hubimage_help'] = 'This image is saved on your hub disk. Once your hub is registered, the hub directory will try to access to this image by HTTP in order to cache it. If the hub directory cannot access to this image, no image will be displayed on the hub directory listing.';
$string['hublang'] = 'Language';
$string['hublang_help'] = 'The main language of the hub.';
$string['hubpassword'] = 'Password';
$string['hubpassword_help'] = 'If you enter a password here, any site will be required to enter this password during registration. We recommand you to communicate this password personally to the desired site administrators. Only private hub can set a password.';
$string['hubregister'] = 'Register your hub with Moodle.org';
$string['hubregisterupdate'] = 'Update your registration on Moodle.org';
$string['hubregistrationcomment'] = 'You are about to register your hub with Moodle.org.  Moodle.org will periodically contact this hub to make sure it is still active and also to refresh this information.';
$string['hubforceunregister'] = 'Force unregister';
$string['hubunregister'] = 'Unregister';
$string['hubwsroledescription'] = 'WARNING: DO NOT DELETE OR MODIFY THIS ROLE. This role has been internally created for a registered site, a hub server or Moodle.org.';
$string['hubwsuserdescription'] = 'WARNING: DO NOT DELETE OR MODIFY THIS USER. This user has been internally created for a registered site, a hub server or Moodle.org.';
$string['hub:registercourse'] = 'Register/Update a course on the hub.';
$string['hub:unregistercourse'] = 'Delete a course from the hub.';
$string['hub:updateinfo'] = 'Update hub information.';
$string['hub:view'] = 'View courses/sites.';
$string['hub:viewinfo'] = 'View hub information.';
$string['image'] = 'Image';
$string['information'] = 'Information';
$string['keepcurrentimage'] = 'Keep current image';
$string['keepcurrentimage_help'] = 'Keep the current image saved on the disk. Even if you choose an image below, the current image will be kept. If you uncheck this, and do not select an new image, the current image will just be deleted.';
$string['keywords'] = 'Keywords';
$string['keywords_help'] = 'You can search for courses containing specific text in the name, description and other fields of the database.';
$string['language'] = 'Language';
$string['language_help'] = 'You can search for courses written in a specific language.';
$string['lastmodified'] = 'Last modified';
$string['lastmodified_help'] = 'Display the last modified courses for a given time period.';
$string['licence'] = 'License';
$string['licence_help'] = 'You can search for courses that are licensed in a particular way.';
$string['logourl'] = 'Logo URL';
$string['managecourses'] = 'Manage courses';
$string['managesites'] = 'Manage sites';
$string['modulenumberaverage'] = 'Average number of course modules ({$a})';
$string['moodleorg'] = 'Moodle.org';
$string['moredetails'] = 'More details';
$string['name'] = 'Name';
$string['name_help'] = 'The hub name will be displayed in the hub directory listing.';
$string['no'] = 'No';
$string['nocourse'] = 'No courses match your search.';
$string['nosearch'] = 'Don\'t publish hub or courses';
$string['nosite'] = 'No sites have been registered yet or match the search.';
$string['notregisteredonhub'] = 'You cannot publish this course on any other hub, because this site isn\'t registered with any other hubs. Contact your administrator to add new hubs.';
$string['notregisteredonmoodleorg'] = 'You cannot publish this course on MOOCH, the Moodle.org Community Hub, because this site isn\'t registered there yet. Your site administrator needs to register this site with MOOCH.';
$string['operation'] = 'Operation';
$string['orenterprivatehub'] = 'or enter a private hub URL:';
$string['participantnumberaverage'] = 'Average number of participants ({$a})';
$string['password'] = 'Password';
$string['periodforteennight'] = 'Last 14 days';
$string['periodmonth'] = 'Last 30 days';
$string['periodweek'] = 'Last 7 days';
$string['postaladdress'] = 'Postal address';
$string['postsnumber'] = 'Number of posts ({$a})';
$string['prioritise'] = 'Prioritised';
$string['prioritise_help'] = 'Display only prioritised sites.';
$string['prioritiseno'] = 'No';
$string['prioritiseyes'] = 'Yes';
$string['privacy'] = 'Privacy';
$string['privacy_help'] = 'You can choose how visible your hub will be on the hub directory.  A private hub will not be listed anywhere on the hub directory, however sites can still register if they know your URL and the (optional) password.';
$string['private'] = 'Private';
$string['privatehuburl'] = 'Private hub URL';
$string['publicationinfo'] = 'Course publication information';
$string['publichub'] = 'Public hub';
$string['publishcourseon'] = 'Publish on {$a}';
$string['publishername'] = 'Publisher';
$string['publishon'] = 'Publish on';
$string['publishonmoodleorg'] = 'Publish on MOOCH, the Moodle.org Community Hub';
$string['publishonspecifichub'] = 'Publish on a Hub';
$string['questionsnumber'] = 'Number of questions ({$a})';
$string['registeredcourses'] = 'Registered courses';
$string['registeredsites'] = 'Registered sites';
$string['registrationconfirmed'] = 'Registration successfull';
$string['registrationinfo'] = 'Registration information';
$string['registersite'] = 'Register on {$a}';
$string['registeron'] = 'Register on';
$string['registeronmoodleorg'] = 'Register on Moodle.org';
$string['registeronspecifichub'] = 'Register on a specific hub';
$string['registration'] = 'Hub server registration';
$string['registrationupdated'] = 'Registration has been updated.';
$string['registrationupdatedfailed'] = 'Registration update failed.';
$string['resourcesnumber'] = 'Number of resources ({$a})';
$string['roleassignmentsnumber'] = 'Number of role assignments ({$a})';
$string['screenshots'] = 'Screenshots';
$string['search'] = 'Search for courses';
$string['selecthub'] = 'Select hub';
$string['sendfollowinginfo'] = 'Send the following information:';
$string['settings'] = 'Settings';
$string['settingsupdated'] = 'Settings have been updated.';
$string['site'] = 'Site';
$string['site_help'] = 'Display only course from this site.';
$string['siteadmin'] = 'Administrator';
$string['sitecreated'] = 'Site created';
$string['sitedesc'] = 'Description';
$string['sitehelpexplanation'] = 'Listing of registered sites on your hub server. To display a site on the top of your
    search result / list, proritise it. Trusted sites will be marked as trusted on the search result / list, and they will be displayed before untrusted sites.
    Prioritised sites are automatically trusted. Finally, only visible sites are displayed on the search result / list (even if they are prioritised/trusted).
    Site that are unreachable for more than a month would be deleted from the database (except if they are trusted/prioritised)';
$string['sitekeywords'] = 'Keywords';
$string['sitekeywords_help'] = 'You can search for sites containing specific text in the name, description and other fields of the database.';
$string['sitelang'] = 'Language';
$string['sitelang_help'] = 'Display only sites with the selected language.';
$string['sitelist'] = 'Site list';
$string['sitelinkpublished'] = 'Link published';
$string['sitename'] = 'Name';
$string['sitenamepublished'] = 'Publish name';
$string['siteoperation'] = 'Site operation';
$string['sitenotpublished'] = 'Not published';
$string['siteprivacy'] = 'Privacy';
$string['siteregconfcomment'] = 'Your site needs a final confirmation on {$a} (in order to avoid spam on {$a})';
$string['siteregistration'] = 'Site registration';
$string['siteregistrationupdated'] = 'Site registration updated';
$string['sitesearch'] = 'Search for sites';
$string['siteupdated'] = '{$a} has been updated successfully.';
$string['siteurl'] = 'Site URL';
$string['sitevisibility'] = 'Visibility';
$string['sitevisibility_help'] = 'Display visible sites, invisible sites or both at the same time.';
$string['specifichub'] = 'Specific hub';
$string['specifichubpublicationdetail'] = 'You can publish on another hub.';
$string['specifichubregistrationdetail'] = 'You can register to other hub.';
$string['statistics'] = 'Statistics privacy';
$string['subject'] = 'Educational subject';
$string['subject_help'] = 'To narrow your search to courses about a particular subject, choose one from this list.';
$string['subjects'] = 'Subjects';
$string['tags'] = 'Tags';
$string['trusted'] = 'Trusted';
$string['trusted_help'] = 'Display only sites set as trusted.';
$string['trustedno'] = 'No';
$string['trustedyes'] = 'Yes';
$string['trustme'] = 'Trust';
$string['unlistedurl'] = 'Unlisted hub URL';
$string['unprioritise'] = 'Unprioritise';
$string['untrustme'] = 'Untrust';
$string['updatesite'] = 'Update registration on {$a}';
$string['url'] = 'hub URL';
$string['urlalreadyexist'] = 'Your new site url is already existing on {$a}. It could come from a bad database on {$a} or a previous registration. Alert the hub administrator. You could have to unregister your site and register again. You must tell the hub administrator if you want to keep your already published courses, as he will need to delete your previous registration.';
$string['usersnumber'] = 'Number of users ({$a})';
$string['visibility'] = 'Visibility';
$string['visibility_help'] = 'Display visible courses, invisible courses or both at the same time.';
$string['visibilityall'] = 'Any';
$string['visibilityyes'] = 'Visible';
$string['visibilityno'] = 'Not visible';
$string['wrongurlformat'] = 'Bad URL format';
$string['wronghubpassword'] = 'Wrong hub password, press continue and try again.';
$string['yeswithmoodle'] = 'Yes, with Moodle';
$string['yeswithoutmoodle'] = 'Yes, without Moodle';

