<?php
#==============================================================================
# LTB Self Service Password
#
# Copyright (C) 2009 Clement OUDOT
# Copyright (C) 2009 LTB-project.org
#
# This program is free software; you can redistribute it and/or
# modify it under the terms of the GNU General Public License
# as published by the Free Software Foundation; either version 2
# of the License, or (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# GPL License: http://www.gnu.org/licenses/gpl.txt
#
#==============================================================================

#==============================================================================
# French
#==============================================================================
$messages['nophpldap'] = "Vous devriez installer PHP LDAP pour utiliser cet outil";
$messages['nophpmhash'] = "Vous devriez installer PHP mhash pour utiliser le mode Samba";
$messages['ldaperror'] = "Erreur d'acc&egrave;s &agrave; l'annuaire";
$messages['loginrequired'] = "Vous devez indiquer votre identifiant";
$messages['oldpasswordrequired'] = "Vous devez indiquer votre ancien mot de passe";
$messages['newpasswordrequired'] = "Vous devez indiquer votre nouveau mot de passe";
$messages['confirmpasswordrequired'] = "Vous devez confirmer votre nouveau mot de passe";
$messages['passwordchanged'] = "Votre mot de passe a &eacute;t&eacute; chang&eacute;";
$messages['nomatch'] = "Les mots de passe ne correspondent pas";
$messages['badcredentials'] = "Identifiant ou mot de passe incorrect";
$messages['passworderror'] = "Le mot de passe a &eacute;t&eacute; refus&eacute;";
$messages['title'] = "Gestion du mot de passe";
$messages['login'] = "Identifiant";
$messages['oldpassword'] = "Ancien mot de passe";
$messages['newpassword'] = "Nouveau mot de passe";
$messages['confirmpassword'] = "Confirmation";
$messages['submit'] = "Envoyer";
$messages['tooshort'] = "Votre mot de passe est trop court";
$messages['toobig'] = "Votre mot de passe est trop long";
$messages['minlower'] = "Votre mot de passe n'a pas assez de minuscules";
$messages['minupper'] = "Votre mot de passe n'a pas assez de majuscules";
$messages['mindigit'] = "Votre mot de passe n'a pas assez de chiffres";
$messages['minspecial'] = "Votre mot de passe n'a pas assez de caract??res sp??ciaux";
$messages['sameasold'] = "Votre mot de passe est identique au pr??c??dent";
$messages['policy'] = "Votre mot de passe doit respecter les contraintes suivantes&nbsp;:";
$messages['policyminlength'] = "Nombre minimum de caract??res&nbsp;:";
$messages['policymaxlength'] = "Nombre maximum de caract??res&nbsp;:";
$messages['policyminlower'] = "Nombre minimum de minuscules&nbsp;:";
$messages['policyminupper'] = "Nombre minimum de majuscules&nbsp;:";
$messages['policymindigit'] = "Nombre minimum de chiffres&nbsp;:";
$messages['policyminspecial'] = "Nombre minimum de caract??res sp??ciaux&nbsp;:";
$messages['forbiddenchars'] = "Votre mot de passe contient des caract??res interdits";
$messages['policyforbiddenchars'] = "Caract??res interdits&nbsp;:";
$messages['policynoreuse'] = "Votre nouveau mot de passe de doit pas ??tre identique ?? l'ancien";
$messages['questions']['birthday'] = "Quelle est votre date de naissance ?";
$messages['questions']['color'] = "Quelle est votre couleur pr??f??r??e ?";
$messages['password'] = "Mot de passe";
$messages['question'] = "Question";
$messages['answer'] = "R??ponse";
$messages['setquestionshelp'] = "Initialisez ou changez votre question/r??ponse pour la r??initialisation de votre mot de passe. Vous pourrez ensuite changer votre mot de passe <a href=\"?action=resetbyquestions\">ici</a>.";
$messages['answerrequired'] = "Pas de r??ponse donn??e";
$messages['questionrequired'] = "Pas de question s??lectionn??e";
$messages['passwordrequired'] = "Vous devez indiquer votre mot de passe";
$messages['answermoderror'] = "Votre r??ponse n'a pas ??t?? enregistr??e";
$messages['answerchanged'] = "Votre r??ponse a ??t?? enregistr??e";
$messages['answernomatch'] = "Votre r??ponse est incorrecte";
$messages['resetbyquestionshelp'] = "Choisissez une question et r??pondez-y pour r??initialiser pour votre mot de passe. Vous devez avoir au pr??alable <a href=\"?action=setquestions\">enregistr?? une r??ponse</a>.";
$messages['changehelp'] = "Entrez votre ancien mot de passe et choisissez-en un nouveau.";
$messages['changehelpreset'] = "Mot de passe oubli?? ?";
$messages['changehelpquestions'] = "<a href=\"?action=resetbyquestions\">R??initialisez votre mot de passe en r??pondant ?? des questions</a>";
$messages['changehelptoken'] = "<a href=\"?action=sendtoken\">R??initialisez votre mot de passe via un challenge par mail</a>";
$messages['changehelpsms'] = "<a href=\"?action=sendsms\">R??initialisez votre mot de passe par SMS</a>";
$messages['resetmessage'] = "Bonjour {login},\n\nCliquez ici pour r??initialiser votre mot de passe :\n{url}\n\nSi vous n'??tes pas ?? l'origine de cette demande, merci de l'ignorer.";
$messages['resetsubject'] = "R??initialisation de votre mot de passe";
$messages['sendtokenhelp'] = "Entrez votre identifiant et votre adresse mail pour r??initialiser votre mot de passe. Cliquez ensuite sur le lien transmis par mail.";
$messages['mail'] = "Adresse mail";
$messages['mailrequired'] = "Vous devez indiquer votre adresse mail";
$messages['mailnomatch'] = "L'adresse mail ne correspond pas ?? l'identifiant donn??";
$messages['tokensent'] = "Un mail de confirmation a ??t?? envoy??";
$messages['tokennotsent'] = "Erreur lors de l'envoi du mail de confirmation";
$messages['tokenrequired'] = "Le jeton de r??initialisation est requis";
$messages['tokennotvalid'] = "Le jeton n'est pas valide";
$messages['resetbytokenhelp'] = "Le jeton envoy?? par mail vous permet de r??initialiser votre mot de passe. Pour recevoir un nouveau jeton, <a href=\"?action=sendtoken\">cliquez ici</a>.";
$messages['resetbysmshelp'] = "Le jeton envoy?? par SMS vous permet de r??initialiser votre mot de passe. Pour recevoir un nouveau jeton, <a href=\"?action=sendsms\">cliquez ici</a>.";
$messages['changemessage'] = "Bonjour {login},\n\nVotre mot de passe a ??t?? chang??.\n\nSi vous n'??tes pas ?? l'orgine de cette demande, contactez votre administrateur imm??diatement.";
$messages['changesubject'] = "Votre mot de passe a ??t?? chang??";
$messages['badcaptcha'] = "Le reCAPTCHA n'a pas ??t?? entr?? correctement. Essayez ?? nouveau.";
$messages['notcomplex'] = "Votre mot de passe n'a pas assez de classes de caract??res diff??rentes.";
$messages['policycomplex'] = "Nombre minimun de classes de caract??res :";
$messages['nophpmcrypt'] = "Vous devriez installer PHP mcrypt pour utiliser les fonctions cryptographiques";
$messages['sms'] = "Num??ro SMS";
$messages['smsresetmessage'] = "Votre jeton est:";
$messages['sendsmshelp'] = "Entrez votre identifiant pour obtenir votre code de confirmation. Entrez ensuite le code re??u par SMS.";
$messages['smssent'] = "Le code de confirmation a ??t?? envoy?? par SMS.";
$messages['smsnotsent'] = "Erreur lors de l'envoi du SMS";
$messages['smsnonumber'] = "Le num??ro de mobile n'a pas ??t?? trouv??.";
$messages['userfullname'] = "Nom complet";
$messages['username'] = "Identifiant";
$messages['smscrypttokensrequired'] = "L'option crypt_tokens est n??cessaire pour utiliser la fonction SMS.";
$messages['smsuserfound'] = "V??rifiez que les informations ci-dessous sont correctes et cliquez sur Envoyer pour recevoir votre code de confirmation.";
$messages['smstoken'] = "Code de confirmation";
$messages['getuser'] = "Trouver l'utilisateur";
$messages['nophpmbstring'] = "Vous devriez installer PHP mbstring";
$messages['menuquestions'] = "Question";
$messages['menutoken'] = "Mail";
$messages['menusms'] = "SMS";
$messages['nophpxml'] = "Vous devriez installer PHP XML pour utiliser cet outil";
$messages['tokenattempts'] = "Jeton invalide, essayez encore";
$messages['emptychangeform'] = "Changez votre mot de passe";
$messages['emptysendtokenform'] = "Recevez un lien pour changer votre mot de passe";
$messages['emptyresetbyquestionsform'] = "R??initialisez votre mot de passe";
$messages['emptysetquestionsform'] = "Enregistrez votre r??ponse";
$messages['emptysendsmsform'] = "Obtenez un code de r??initialisation";
$messages['sameaslogin'] = "Votre mot de passe est identique ?? votre identifiant";
$messages['policydifflogin'] = "Votre nouveau mot de passe ne doit pas ??tre identique ?? votre identifant";

?>
