<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('lb', array (
  'validators' => 
  array (
    'This value should be false.' => 'Dëse Wäert sollt falsch sinn.',
    'This value should be true.' => 'Dëse Wäert sollt wouer sinn.',
    'This value should be of type {{ type }}.' => 'Dëse Wäert sollt vum Typ {{ type }} sinn.',
    'This value should be blank.' => 'Dëse Wäert sollt eidel sinn.',
    'The value you selected is not a valid choice.' => 'Dëse Wäert sollt enger vun de Wielméiglechkeeten entspriechen.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Et muss mindestens {{ limit }} Méiglechkeet ausgewielt ginn.|Et musse mindestens {{ limit }} Méiglechkeeten ausgewielt ginn.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Et dierf héchstens {{ limit }} Méiglechkeet ausgewielt ginn.|Et dierfen héchstens {{ limit }} Méiglechkeeten ausgewielt ginn.',
    'One or more of the given values is invalid.' => 'Een oder méi vun de Wäerter ass ongëlteg.',
    'The fields {{ fields }} were not expected.' => 'D\'Felder {{ fields }} goufen net erwaart.',
    'The fields {{ fields }} are missing.' => 'D\'Felder {{ fields }} feelen.',
    'This value is not a valid date.' => 'Dëse Wäert entsprécht kenger gëlteger Datumsangab.',
    'This value is not a valid datetime.' => 'Dëse Wäert entsprécht kenger gëlteger Datums- an Zäitangab.',
    'This value is not a valid email address.' => 'Dëse Wäert ass keng gëlteg Email-Adress.',
    'The file could not be found.' => 'De Fichier gouf net fonnt.',
    'The file is not readable.' => 'De Fichier ass net liesbar.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'De Fichier ass ze grouss ({{ size }} {{ suffix }}). Déi zougeloosse Maximalgréisst bedréit {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Den Typ vum Fichier ass ongëlteg ({{ type }}). Erlaabten Type sinn {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Dëse Wäert soll méi kleng oder gläich {{ limit }} sinn.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Dës Zeecheketten ass ze laang. Se sollt héchstens {{ limit }} Zeechen hunn.',
    'This value should be {{ limit }} or more.' => 'Dëse Wäert sollt méi grouss oder gläich {{ limit }} sinn.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Dës Zeecheketten ass ze kuerz. Se sollt mindestens {{ limit }} Zeechen hunn.',
    'This value should not be blank.' => 'Dëse Wäert sollt net eidel sinn.',
    'This value should not be null.' => 'Dëst sollt keen Null-Wäert sinn.',
    'This value should be null.' => 'Dëst sollt keen Null-Wäert sinn.',
    'This value is not valid.' => 'Dëse Wäert ass net gëlteg.',
    'This value is not a valid time.' => 'Dëse Wäert entsprécht kenger gëlteger Zäitangab.',
    'This value is not a valid URL.' => 'Dëse Wäert ass keng gëlteg URL.',
    'The two values should be equal.' => 'Béid Wäerter sollten identesch sinn.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'De fichier ass ze grouss. Déi maximal Gréisst dierf {{ limit }} {{ suffix }} net depasséieren.',
    'The file is too large.' => 'De Fichier ass ze grouss.',
    'The file could not be uploaded.' => 'De Fichier konnt net eropgeluede ginn.',
    'This value should be a valid number.' => 'Dëse Wäert sollt eng gëlteg Zuel sinn.',
    'This file is not a valid image.' => 'Dëse Fichier ass kee gëltegt Bild.',
    'This is not a valid IP address.' => 'Dëst ass keng gëlteg IP-Adress.',
    'This value is not a valid language.' => 'Dëse Wäert entsprécht kenger gëlteger Sprooch.',
    'This value is not a valid locale.' => 'Dëse Wäert entsprécht kengem gëltege Gebittsschema.',
    'This value is not a valid country.' => 'Dëse Wäert entsprécht kengem gëltege Land.',
    'This value is already used.' => 'Dëse Wäert gëtt scho benotzt.',
    'The size of the image could not be detected.' => 'D\'Gréisst vum Bild konnt net detektéiert ginn.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'D\'Breet vum Bild ass ze grouss ({{ width }}px). Déi erlaabte maximal Breet ass {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'D\'Breet vum Bild ass ze kleng ({{ width }}px). Déi minimal Breet ass {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'D\'Héicht vum Bild ass ze grouss ({{ height }}px). Déi erlaabte maximal Héicht ass {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'D\'Héicht vum Bild ass ze kleng ({{ height }}px). Déi minimal Héicht ass {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Dëse Wäert sollt dem aktuelle Benotzerpasswuert entspriechen.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Dëse Wäert sollt exakt {{ limit }} Buschtaf hunn.|Dëse Wäert sollt exakt {{ limit }} Buschtawen hunn.',
    'The file was only partially uploaded.' => 'De Fichier gouf just deelweis eropgelueden.',
    'No file was uploaded.' => 'Et gouf kee Fichier eropgelueden.',
    'No temporary folder was configured in php.ini.' => 'Et gouf keen temporären Dossier an der php.ini konfiguréiert oder den temporären Dossier existéiert net.',
    'Cannot write temporary file to disk.' => 'Den temporäre Fichier kann net gespäichert ginn.',
    'A PHP extension caused the upload to fail.' => 'Eng PHP-Erweiderung huet den Upload verhënnert.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Dës Sammlung sollt {{ limit }} oder méi Elementer hunn.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Dës Sammlung sollt {{ limit }} oder manner Elementer hunn.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Dës Sammlung sollt exakt {{ limit }} Element hunn.|Dës Sammlung sollt exakt {{ limit }} Elementer hunn.',
    'Invalid card number.' => 'Ongëlteg Kaartennummer.',
    'Unsupported card type or invalid card number.' => 'Net ënnerstëtzte Kaartentyp oder ongëlteg Kaartennummer.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Dëst ass keng gëlteg IBAN-Kontonummer.',
    'This value is not a valid ISBN-10.' => 'Dëse Wäert ass keng gëlteg ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Dëse Wäert ass keng gëlteg ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Dëse Wäert ass weder eng gëlteg ISBN-10 nach eng gëlteg ISBN-13.',
    'This value is not a valid ISSN.' => 'Dëse Wäert ass keng gëlteg ISSN.',
    'This value is not a valid currency.' => 'Dëse Wäert ass keng gëlteg Währung.',
    'This value should be equal to {{ compared_value }}.' => 'Dëse Wäert sollt {{ compared_value }} sinn.',
    'This value should be greater than {{ compared_value }}.' => 'Dëse Wäert sollt méi grouss wéi {{ compared_value }} sinn.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Dëse Wäert sollt méi grouss wéi oder gläich {{ compared_value }} sinn.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Dëse Wäert sollt identesch si mat {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Dëse Wäert sollt méi kleng wéi {{ compared_value }} sinn.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Dëse Wäert sollt méi kleng wéi oder gläich {{ compared_value }} sinn.',
    'This value should not be equal to {{ compared_value }}.' => 'Dëse Wäert sollt net {{ compared_value }} sinn.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Dëse Wäert sollt net identesch si mat {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'D\'Säiteverhältnis vum Bild ass ze grouss ({{ ratio }}). Den erlaabte Maximalwäert ass {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'D\'Säiteverhältnis vum Bild ass ze kleng ({{ ratio }}). Den erwaarte Minimalwäert ass {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'D\'Bild ass quadratesch ({{ width }}x{{ height }}px). Quadratesch Biller sinn net erlaabt.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'D\'Bild ass am Queeschformat ({{ width }}x{{ height }}px). Biller am Queeschformat sinn net erlaabt.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'D\'Bild ass am Héichformat ({{ width }}x{{ height }}px). Biller am Héichformat sinn net erlaabt.',
    'An empty file is not allowed.' => 'En eidele Fichier ass net erlaabt.',
    'The host could not be resolved.' => 'Den Host-Numm konnt net opgeléist ginn.',
    'This value does not match the expected {{ charset }} charset.' => 'Dëse Wäert entsprécht net dem erwaarten Zeechesaz {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'Dëst ass kee gëltege "Business Identifier Code" (BIC).',
    'Error' => 'Feeler',
    'This is not a valid UUID.' => 'Dëst ass keng gëlteg UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'Dëse Wäert sollt e puer vun {{ compared_value }} sinn.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Dëse "Business Identifier Code" (BIC) ass net mat IBAN verbonnen {{ iban }}.',
    'This value should be valid JSON.' => 'Dëse Wäert sollt gëlteg JSON.',
    'This form should not contain extra fields.' => 'Dës Feldergrupp sollt keng zousätzlech Felder enthalen.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'De geschécktene Fichier ass ze grouss. Versicht wann ech gelift ee méi klenge Fichier eropzelueden.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Den CSRF-Token ass ongëlteg. Versicht wann ech gelift de Formulaire nach eng Kéier ze schécken.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Bei der Authentifikatioun ass e Feeler opgetrueden.',
    'Authentication credentials could not be found.' => 'Et konnte keng Zouganksdate fonnt ginn.',
    'Authentication request could not be processed due to a system problem.' => 'D\'Ufro fir eng Authentifikatioun konnt wéinst engem Problem vum System net beaarbecht ginn.',
    'Invalid credentials.' => 'Ongëlteg Zouganksdaten.',
    'Cookie has already been used by someone else.' => 'De Cookie gouf scho vun engem anere benotzt.',
    'Not privileged to request the resource.' => 'Keng Rechter fir d\'Ressource unzefroen.',
    'Invalid CSRF token.' => 'Ongëltegen CSRF-Token.',
    'No authentication provider found to support the authentication token.' => 'Et gouf keen Authentifizéierungs-Provider fonnt deen den Authentifizéierungs-Token ënnerstëtzt.',
    'No session available, it either timed out or cookies are not enabled.' => 'Keng Sëtzung disponibel. Entweder ass se ofgelaf oder Cookies sinn net aktivéiert.',
    'No token could be found.' => 'Et konnt keen Token fonnt ginn.',
    'Username could not be found.' => 'De Benotzernumm konnt net fonnt ginn.',
    'Account has expired.' => 'Den Account ass ofgelaf.',
    'Credentials have expired.' => 'D\'Zouganksdate sinn ofgelaf.',
    'Account is disabled.' => 'De Konto ass deaktivéiert.',
    'Account is locked.' => 'De Konto ass gespaart.',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini, or the configured folder does not exist.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This is not a valid Business Identifier Code (BIC).',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'This is not a valid UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'This value should be a multiple of {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'This value should be valid JSON.',
    'This collection should contain only unique elements.' => 'This collection should contain only unique elements.',
    'This value should be positive.' => 'This value should be positive.',
    'This value should be either positive or zero.' => 'This value should be either positive or zero.',
    'This value should be negative.' => 'This value should be negative.',
    'This value should be either negative or zero.' => 'This value should be either negative or zero.',
    'This value is not a valid timezone.' => 'This value is not a valid timezone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'This password has been leaked in a data breach, it must not be used. Please use another password.',
    'This value should be between {{ min }} and {{ max }}.' => 'This value should be between {{ min }} and {{ max }}.',
    'This value is not a valid hostname.' => 'This value is not a valid hostname.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'The number of elements in this collection should be a multiple of {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'This value should satisfy at least one of the following constraints:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Each element of this collection should satisfy its own set of constraints.',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Previous',
    'label_next' => 'Next',
    'filter_searchword' => 'Searchword...',
  ),
  'VichUploaderBundle' => 
  array (
    'download' => 'Download',
    'form.label.delete' => 'Delete?',
  ),
  'EasyAdminBundle' => 
  array (
    'new.page_title' => 'Create %entity_label%',
    'show.page_title' => '%entity_label% (#%entity_id%)',
    'edit.page_title' => 'Edit %entity_label% (#%entity_id%)',
    'list.page_title' => '%entity_label%',
    'search.page_title' => '{0} No results found|{1} <strong>1</strong> result found|]1,Inf] <strong>%count%</strong> results found',
    'search.no_results' => 'No results found.',
    'list.row_actions' => 'Actions',
    'paginator.first' => 'First',
    'paginator.previous' => 'Previous',
    'paginator.next' => 'Next',
    'paginator.last' => 'Last',
    'paginator.counter' => '<strong>%start%</strong> - <strong>%end%</strong> of <strong>%results%</strong>',
    'paginator.results' => '{0} No results|{1} <strong>1</strong> result|]1,Inf] <strong>%count%</strong> results',
    'label.true' => 'Yes',
    'label.false' => 'No',
    'label.empty' => 'Empty',
    'label.null' => 'Null',
    'label.nullable_field' => 'Leave empty',
    'label.object' => 'PHP Object',
    'label.inaccessible' => 'Inaccessible',
    'label.inaccessible.explanation' => 'Getter method does not exist for this field or the property is not public',
    'label.form.empty_value' => 'None',
    'user.logged_in_as' => 'Logged in as',
    'user.unnamed' => 'Unnamed User',
    'user.anonymous' => 'Anonymous User',
    'user.signout' => 'Sign out',
    'user.exit_impersonation' => 'Exit impersonation',
    'delete_modal.title' => 'Do you really want to delete this item?',
    'delete_modal.content' => 'There is no undo for this operation.',
    'delete_modal.action' => 'Delete',
    'batch_action_modal.title' => 'You are going to apply the "%action_name%" action to %num_items% item(s).',
    'batch_action_modal.content' => 'You can\'t undo this action.',
    'action.add_new_item' => 'Add a new item',
    'action.remove_item' => 'Remove the item',
    'action.choose_file' => 'Choose file',
    'errors' => 'Error|Errors',
    'form.are_you_sure' => 'You haven\'t saved the changes made on this form.',
    'form.tab.error_badge_title' => 'One invalid input|%count% invalid inputs',
    'show.remaining_items' => '{1} there is another item not displayed in this listing|]1,Inf] %count% other items are not displayed in this listing',
    'exception.entity_not_found' => 'This item is no longer available.',
    'exception.entity_remove' => 'This item can\'t be deleted because other items depend on it.',
    'exception.forbidden_action' => 'The requested action can\'t be performed on this item.',
    'exception.no_entities_configured' => 'The application is not properly configured.',
    'exception.undefined_entity' => 'The application is not properly configured for this kind of items.',
    'exception.no_permission' => 'You don\'t have enough permissions to do this.',
    'login.username' => 'Username',
    'login.password' => 'Password',
    'login.sign_in' => 'Sign in',
    'filter.title' => 'Filters',
    'filter.button.clear' => 'Clear',
    'filter.button.apply' => 'Apply',
    'filter.label.is_equal_to' => 'is equal to',
    'filter.label.is_not_equal_to' => 'is not equal to',
    'filter.label.is_greater_than' => 'is greater than',
    'filter.label.is_greater_than_or_equal_to' => 'is greater than or equal to',
    'filter.label.is_less_than' => 'is less than',
    'filter.label.is_less_than_or_equal_to' => 'is less than or equal to',
    'filter.label.is_between' => 'is between',
    'filter.label.contains' => 'contains',
    'filter.label.not_contains' => 'doesn\'t contain',
    'filter.label.starts_with' => 'starts with',
    'filter.label.ends_with' => 'ends with',
    'filter.label.exactly' => 'exactly',
    'filter.label.not_exactly' => 'not exactly',
    'filter.label.is_same' => 'is same',
    'filter.label.is_not_same' => 'is not same',
    'filter.label.is_after' => 'is after',
    'filter.label.is_after_or_same' => 'is after or same',
    'filter.label.is_before' => 'is before',
    'filter.label.is_before_or_same' => 'is before or same',
    'security.list.hidden_results' => 'Some results can\'t be displayed because you don\'t have enough permissions',
  ),
  'messages' => 
  array (
    'action.new' => 'Add %entity_label%',
    'action.show' => 'Show',
    'action.edit' => 'Edit',
    'action.search' => 'Search',
    'action.delete' => 'Delete',
    'action.save' => 'Save changes',
    'action.continue' => 'Continue',
    'action.cancel' => 'Cancel',
    'action.list' => 'Back to listing',
    'action.deselect' => 'Deselect',
    'label.form.empty_value' => 'None',
    '__name__label__' => '__name__label__',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
