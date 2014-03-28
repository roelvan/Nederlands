<?php
// Copyright 2011 Toby Zerner, Simon Zerner
// This file is part of esoTalk. Please see the included license file for usage information.

ET::$languageInfo["Nederlands"] = array(
	"locale" => "nl_NL",
	"name" => "Nederlands",
	"description" => "Een Nederlands taal pakket.",
	"version" => ESOTALK_VERSION,
	"author" => "Tristan van Bokkem",
	"authorEmail" => "tristanvanbokkem@gmail.com",
	"authorURL" => "http://www.bitcoinclub.nl",
	"license" => "GPLv2"
);

// Define the character set that this language uses.
$definitions["charset"] = "utf-8";

$definitions["date.full"] = "%c"; // see http://au.php.net/manual/en/function.date.php for details

//$definitions["date.full"] = "%d %b %Y, %H:%M \G\M\TO"; // see http://au.php.net/manual/en/function.date.php for details

$definitions["%d day ago"] = "gisteren";
$definitions["%d days ago"] = "%d dagen geleden";
$definitions["%d hour ago"] = "1 uur geleden";
$definitions["%d hours ago"] = "%d uur geleden";
$definitions["%d minute ago"] = "1 minuut geleden";
$definitions["%d minutes ago"] = "%d minuten geleden";
$definitions["%d month ago"] = "1 maand geleden";
$definitions["%d months ago"] = "%d maanden geleden";
$definitions["%d second ago"] = "1 seconde geleden";
$definitions["%d seconds ago"] = "%d seconden geleden";
$definitions["%d week ago"] = "vorige week";
$definitions["%d weeks ago"] = "%d weken geleden";
$definitions["%d year ago"] = "vorig jaar";
$definitions["%d years ago"] = "%d jaren geleden";

$definitions["%s and %s"] = "%s en %s";
$definitions["%s can view this conversation."] = "%s kan dit onderwerp bekijken.";
$definitions["%s changed %s's group to %s."] = "%s heeft %s's groep veranderd naar %s.";
$definitions["%s changed your group to %s."] = "%s heeft je groep veranderd naar %s.";
$definitions["%s conversation"] = "%s onderwerp";
$definitions["%s conversations"] = "%s onderwerpen";
$definitions["%s invited you to %s."] = "%s invited you to %s.";
$definitions["%s joined the forum."] = "%s is lid geworden.";
$definitions["%s post"] = "%s bericht";
$definitions["%s posted %s"] = "%s geplaatst %s";
$definitions["%s posted in %s."] = "%s geplaatst in %s.";
$definitions["%s posts"] = "%s berichten";
$definitions["%s reply"] = "%s reactie";
$definitions["%s replies"] = "%s reacties";
$definitions["%s Settings"] = "%s Instellingen";
$definitions["%s started the conversation %s."] = "%s heeft het onderwerp gestart %s.";
$definitions["%s tagged you in a post."] = "%s noemt je in een reactie.";
$definitions["%s will be able to view this conversation."] = "%s is in staat dit onderwerp te bekijken.";
$definitions["%s will be able to:"] = "%s kan het volgende:";

$definitions["A new version of esoTalk (%s) is available."] = "Een nieuwe versie van esoTalk (%s) is beschikbaar.";
$definitions["a private conversation"] = "een prive bericht";
$definitions["Automatically follow conversations that I reply to"] = "Volg onderwerpen automatisch waarin ik reageer";
$definitions["Automatically follow private conversations that I'm added to"] = "Volg prive berichten automatisch";
$definitions["Access the administrator control panel."] = "Open het administratiepaneel.";
$definitions["Account type"] = "Account type";
$definitions["Activate"] = "Activeren";
$definitions["Activity"] = "Activiteit";
$definitions["Add"] = "Toevoegen";
$definitions["Administration"] = "Administratie";
$definitions["Administrator email"] = "Beheerder email";
$definitions["Administrator password"] = "Beheerder wachtwoord";
$definitions["Administrator username"] = "Beheerder gebruikersnaam";
$definitions["Advanced options"] = "Geadvanceerde opties";
$definitions["All Channels"] = "Alle kanalen";
$definitions["Allow members to edit their own posts:"] = "Allow members to edit their own posts:";
$definitions["Already have an account? <a href='%s' class='link-login'>Log in!</a>"] = "Al geregistreerd? <a href='%s' class='link-login'>Log in!</a>";
$definitions["Appearance"] = "Appearance";
$definitions["Automatically star conversations that I reply to"] = "Volg onderwerpen automatisch waarin ik reageer";
$definitions["Avatar"] = "Avatar";

$definitions["Back to channels"] = "Terug naar kanalen";
$definitions["Back to conversation"] = "Terug naar onderwerpen";
$definitions["Back to member"] = "Terug naar lid";
$definitions["Back to members"] = "Terug naar leden";
$definitions["Back to search"] = "Terug naar zoeken";
$definitions["Background color"] = "Achtergrondkleur";
$definitions["Background image"] = "Achtergrond afbeelding";
$definitions["Base URL"] = "Forum URL";
$definitions["Bold"] = "Vet";
$definitions["By %s"] = "Door %s";

$definitions["Can suspend/unsuspend members"] = "Kan leden deactiveren/activeren";
$definitions["Cancel"] = "Annuleren";
$definitions["Change"] = "Wijzig";
$definitions["Change %s's Permissions"] = "Wijzig %s's permissies";
$definitions["Change avatar"] = "Wijzig avatar";
$definitions["Change Channel"] = "Wijzig Kanaal";
$definitions["Change channel"] = "Wijzig kanaal";
$definitions["Change username"] = "Wijzig gebruikersnaam";
$definitions["Change Password or Email"] = "Wijzig Wachtwoord of Email";
$definitions["Change Password"] = "Wijzig Wachtwoord";
$definitions["Change password"] = "Wijzig wachtwoord";
$definitions["Change permissions"] = "Change permissions";
$definitions["Change your avatar on <a href='http://gravatar.com' target='_blank'>Gravatar.com</a>."] = "Verander je avatar op <a href='http://gravatar.com' target='_blank'>Gravatar.com</a>.";
$definitions["Channel description"] = "Kanaal omschrijving";
$definitions["Channel List"] = "Kanalenlijst";
$definitions["Channel title"] = "Kanaaltitel";
$definitions["Channel slug"] = "Kanaal slug";
$definitions["Channels"] = "Kanalen";
$definitions["Choose a secure password of at least %s characters"] = "Kies een veilig wachtwoord met op zijn minst %s tekens";
$definitions["Choose what people will see when they first visit your forum."] = "Kies wat mensen zien tijdens hun eerste bezoek.";
$definitions["Click on a member's name to remove them."] = "Klik op een lid om deze te verwijdern.";
$definitions["Close registration"] = "Sluit registratie";
$definitions["Confirm password"] = "Bevestigd wachtwoord";
$definitions["Context"] = "Context";
$definitions["Controls"] = "Beheer";
$definitions["Conversation"] = "Onderwerp";
$definitions["Conversations participated in"] = "Deelgenomen onderwerpen";
$definitions["Conversations started"] = "Onderwerpen gestart";
$definitions["Conversations"] = "Onderwerpen";
$definitions["Copy permissions from"] = "Kopieer permissies van";
$definitions["Create Channel"] = "Nieuw kanaal";
$definitions["Create Field"] = "Nieuw veld";
$definitions["Create Group"] = "Nieuw groep";
$definitions["Create Member"] = "Nieuw lid";
$definitions["Customize how users can become members of your forum."] = "Pas de manier waarop leden lid kunnen worden van het forum aan.";
$definitions["Customize your forum's appearance"] = "Pas het forum uiterlijk aan";

$definitions["Dashboard"] = "Startpagina";
$definitions["Default forum language"] = "Standaard forum taal";
$definitions["<strong>Delete</strong> all conversations forever."] = "<strong>Verwijder</strong> alle onderwerpen permanent.";
$definitions["Delete Channel"] = "Verwijder kanaal";
$definitions["Delete conversation"] = "Verwijder onderwerp";
$definitions["Delete member"] = "Verwijder lid";
$definitions["Delete Member"] = "Verwijder lid";
$definitions["<strong>Delete this member's posts.</strong> All of this member's posts will be marked as deleted, but will be able to be restored manually."] = "<strong>Verwijder alle reacties van dit lid.</strong> Alle reacties van dit lid worden gemarkeerd als verwijderd, maar kunnen handmatig worden hersteld.";
$definitions["Delete"] = "Verwijderen";
$definitions["Deleted %s by %s"] = "Verwijderd %s door %s";
$definitions["Disable"] = "Uitschakelen";
$definitions["Discard"] = "Verwijder";
$definitions["Don't allow other users to see when I am online"] = "Sta niet toe dat andere leden zien dat je online bent";
$definitions["Don't have an account? <a href='%s' class='link-join'>Sign up!</a>"] = "Nog geen account? <a href='%s' class='link-join'>Meld je aan!</a>";
$definitions["Don't repeat"] = "Niet herhalen";

$definitions["Edit Channel"] = "Bewerk kanaal";
$definitions["Edit Field"] = "Bewerk veld";
$definitions["Edit Group"] = "Bewerk groep";
$definitions["Edit member groups"] = "Bewerk groepsleden";
$definitions["Edit your profile"] = "Bewerk je profiel";
$definitions["Edit"] = "Bewerken";
$definitions["Edited %s by %s"] = "Bewerkt %s door %s";
$definitions["Editing permissions"] = "Wijzig permissies";
$definitions["Email me when I'm added to a private conversation"] = "Email mij wanneer ik ben toegevoegd aan een prive bericht";
$definitions["Email me when someone mentions me in a post"] = "Email mij wanneer iemand me noemt in een onderwerp";
$definitions["Email me when someone posts in a channel I have followed"] = "Email mij wanneer iemand een nieuwe reactie plaatst in een kanaal dat ik volg";
$definitions["Email me when someone posts in a conversation I have followed"] = "Email mij wanneer iemand een reactie plaatst in een onderwerp dat ik volg";
$definitions["Email me when there is a new post by a member I have followed"] = "Email mij wanneer er een nieuwe reactie is van een lid dat ik volg";
$definitions["Email"] = "Email";
$definitions["Enable"] = "Activeren";
$definitions["Enabled"] = "Actief";
$definitions["Enter a conversation title"] = "Vul een onderwerp titel in";
$definitions["Error"] = "Fout";
$definitions["esoTalk version"] = "esoTalk versie";
$definitions["Everyone"] = "Iedereen";

$definitions["Fatal Error"] = "Aai! Een fatale fout...";
$definitions["Feed"] = "Feed";
$definitions["Field description"] = "Veld omschrijving";
$definitions["Field name"] = "Veld naam";
$definitions["Filter by name or group..."] = "Filter op naam of groep...";
$definitions["Find this post"] = "Zoek deze reactie";
$definitions["First posted"] = "Eerste reactie";
$definitions["Follow to receive notifications"] = "Volg om notificaties te ontvangen";
$definitions["Follow"] = "Volgen";
$definitions["Following"] = "Volgt";
$definitions["For %s seconds"] = "Voor %s seconden";
$definitions["Forever"] = "Altijd";
$definitions["Forgot?"] = "Vergeten?";
$definitions["Forgot Password"] = "Vergeet wachtwoord";
$definitions["Forum header"] = "Forum header";
$definitions["Forum language"] = "Forum taal";
$definitions["Forum Settings"] = "Forum instellingen";
$definitions["Forum Statistics"] = "Forum statistieken";
$definitions["Forum title"] = "Forum titel";
$definitions["forumDescription"] = "%s is een web-forum discussie %s, en %s.";

$definitions["Give this group the 'moderate' permission on all existing channels"] = "Geef deze groep de 'moderate' permissies over alle bestaande kanalen";
$definitions["Global permissions"] = "Algemene permissies";
$definitions["Go to top"] = "Naar boven";
$definitions["Group name"] = "Groepnaam";
$definitions["group.administrator"] = "Beheerder";
$definitions["group.administrator.plural"] = "Beheerders";
$definitions["group.guest"] = "Gast";
$definitions["group.guest.plural"] = "Gasten";
$definitions["group.member"] = "lid";
$definitions["group.member.plural"] = "Leden";
$definitions["group.Moderator"] = "Moderator";
$definitions["group.Moderator.plural"] = "Moderators";
$definitions["group.suspended"] = "Geblokkeerd";
$definitions["Groups can be used to categorize members and give them certain privileges."] = "Groepen kunnen worden gebruikt om leden te categoriseren met bepaalde permissies.";
$definitions["Groups"] = "Groepen";

$definitions["Header"] = "Header";
$definitions["Header color"] = "Header kleur";
$definitions["Hide"] = "Verbergen";
$definitions["Hide field from guests"] = "Verberg veld voor gasten";
$definitions["Home page"] = "Startpagina";
$definitions["HTML is allowed."] = "HTML is toegestaan.";

$definitions["If you run into any other problems or just want some help with the installation, feel free to ask for assistance at the <a href='%s'>esoTalk support forum</a>."] = "Mocht je tegen problemen aanlopen of wens je hulp tijdens de installatie kan je om assistentie vragen op het <a href='%s'>esoTalk support forum</a>.";
$definitions["Input type"] = "Soort veld";
$definitions["Install esoTalk"] = "Installeer esoTalk";
$definitions["Install My Forum"] = "Installeer mijn forum";
$definitions["Installed Languages"] = "Geinstalleerde Languages";
$definitions["Installed Plugins"] = "Geinstalleerde Plugins";
$definitions["Installed plugins"] = "Installed plugins";
$definitions["Installed Skins"] = "Geinstalleerde Skins";
$definitions["Installed skins"] = "Geinstalleerde skins";
$definitions["is %s"] = "is %s";

$definitions["Joined"] = "Lid sinds";
$definitions["Jump to last"] = "Spring naar laatste";
$definitions["Jump to unread"] = "Spring naar ongelezen";
$definitions["just now"] = "zojuist";

$definitions["Keep me logged in"] = "Blijft ingelogd";
$definitions["<strong>Keep this member's posts.</strong> All of this member's posts will remain intact, but will show [deleted] as the author."] = "<strong>Behoud de berichten van dit lid.</strong> Alle berichten van dit lid blijven behouden, maar de auteur wordt weergegeven als [verwijderd].";

$definitions["label.answered"] = "Beantwoord";
$definitions["label.draft"] = "Concept";
$definitions["label.locked"] = "Gesloten";
$definitions["label.muted"] = "Gedempt";
$definitions["label.private"] = "Prive";
$definitions["label.sticky"] = "Sticky";
$definitions["Labels"] = "Labels";
$definitions["Last active"] = "Laatst actief";
$definitions["Last active %s"] = "Laatst actief %s";
$definitions["Latest News"] = "Laatste nieuws";
$definitions["Loading..."] = "Laden...";
$definitions["Lock"] = "Sluit";
$definitions["Log In"] = "Inloggen";
$definitions["Log Out"] = "Uitloggen";

$definitions["Make member and online list visible to:"] = "Maak lid en online lijst zichtbaar voor:";
$definitions["Manage Groups"] = "Beheer groepen";
$definitions["Manage Languages"] = "Beheer talen";
$definitions["Manage Profile Fields"] = "Beheer profiel velden";
$definitions["Manage your forum's channels (categories)"] = "Beheer de forum kanalen (categorieën)";
$definitions["Mark as read"] = "Markeer als gelezen";
$definitions["Mark as unread"] = "Markeer als ongelezen";
$definitions["Mark all as read"] = "Markeer alles als gelezen";
$definitions["Mark listed as read"] = "Markeer weergegeven als gelezen";
$definitions["Maximum size of %s. %s."] = "Maximale grootte van %s. %s.";
$definitions["Member groups"] = "Leden Groepen";
$definitions["Member list"] = "Ledenlijst";
$definitions["Member List"] = "Ledenlijst";
$definitions["Member privacy"] = "Leden privacy";
$definitions["Members Allowed to View this Conversation"] = "Leden die permissies hebben om dit onderwerp te bekijken";
$definitions["Members Online"] = "Leden online";
$definitions["Members"] = "Leden";
$definitions["Mobile skin"] = "Mobiele skin";
$definitions["Moderate"] = "Moderate";
$definitions["<strong>Move</strong> conversations to the following channel:"] = "<strong>Verplaats</strong> onderwerpen naar het volgende kanaal:";
$definitions["Mute conversation"] = "Demp onderwerp";
$definitions["MySQL database"] = "MySQL database";
$definitions["MySQL host address"] = "MySQL host adres";
$definitions["MySQL password"] = "MySQL wachtwoord";
$definitions["MySQL queries"] = "MySQL queries";
$definitions["MySQL table prefix"] = "MySQL tabel prefix";
$definitions["MySQL username"] = "MySQL gebruikersnaam";
$definitions["MySQL version"] = "MySQL versie";

$definitions["Name"] = "Naam";
$definitions["never"] = "nooit";
$definitions["%s new"] = "%s nieuw";
$definitions["New conversation"] = "Nieuw onderwerp";
$definitions["New Conversation"] = "Nieuw Onderwerp";
$definitions["New conversations in the past week"] = "Nieuwe onderwerpen in de afgelopen week";
$definitions["New email"] = "Nieuw e-mail";
$definitions["New members in the past week"] = "Nieuwe leden in de afgelopen week";
$definitions["New password"] = "Nieuw wachtwoord";
$definitions["New posts in the past week"] = "Nieuwe berichten in de afgelopen week";
$definitions["New username"] = "Nieuwe gebruikersnaam";
$definitions["Next Step"] = "Volgende Stap";
$definitions["Next"] = "Volgende";
$definitions["No preview"] = "Geen voorbeeld";
$definitions["No"] = "Nee";
$definitions["Notifications"] = "Notificaties";
$definitions["Now"] = "nu";

$definitions["OK"] = "OK";
$definitions["Online"] = "Online";
$definitions["online"] = "online";
$definitions["Open registration"] = "Open registratie";
$definitions["optional"] = "optioneel";
$definitions["Options"] = "Opties";
$definitions["Order By:"] = "Sorteer op:";
$definitions["Original Post"] = "origineel bericht";

$definitions["Page Not Found"] = "Pagina niet gevonden";
$definitions["Password"] = "Wachtwoord";
$definitions["PHP version"] = "PHP versie";
$definitions["Plugins"] = "Plugins";
$definitions["Post a Reply"] = "Reageer";
$definitions["Post count"] = "Aantal berichten";
$definitions["Posts"] = "Posts";
$definitions["Preview"] = "Voorbeeld";
$definitions["Previous"] = "Vorige";

$definitions["Quote"] = "Quote";
$definitions["quote"] = "quote";

$definitions["Read more"] = "Lees meer";
$definitions["Recent posts"] = "Recente berichten";
$definitions["Recover Password"] = "Herstel wachtwoord";
$definitions["Registered members"] = "Geregistreerd lid";
$definitions["Registration"] = "Registratie";
$definitions["Remove avatar"] = "Verwijder avatar";
$definitions["Rename Member"] = "Hernoem lid";
$definitions["Reply"] = "Reageer";
$definitions["Report a bug"] = "Rapporteer een bug";
$definitions["Require users to confirm their email address"] = "Verplicht leden hun e-mail adres te valideren";
$definitions["Restore"] = "Herstel";
$definitions["restore"] = "herstel";
$definitions["Reset"] = "Annulleer";

$definitions["Save Changes"] = "Opslaan";
$definitions["Save Draft"] = "Opslaan als concept";
$definitions["Search conversations..."] = "Zoek onderwerpen...";
$definitions["Search within this conversation..."] = "Zoek binnen onderwerp...";
$definitions["Search"] = "Zoeken";
$definitions["See the private conversations I've had with %s"] = "Toon de prive berichten die ik heb gehad met %s";
$definitions["Set a New Password"] = "Stel een nieuwe wachtwoord in";
$definitions["Settings"] = "Instellingen";
$definitions["Show an image in the header"] = "Toon een afbeelding in de header";
$definitions["Show field on posts"] = "Toon veld in berichten";
$definitions["Show matching posts"] = "Toon berichten";
$definitions["Show the channel list by default"] = "Toon standaard de kanalen lijst";
$definitions["Show the conversation list by default"] = "Toon standaard de onderwerpen lijst";
$definitions["Show the forum title in the header"] = "Toon de titel in de header";
$definitions["Sign Up"] = "Aanmelden";
$definitions["Skins"] = "Skins";
$definitions["Specify Setup Information"] = "Specifeer setup informatie";
$definitions["Star to receive notifications"] = "Volg om notificaties te ontvangen";
$definitions["Starred"] = "Volg";
$definitions["Start"] = "Start";
$definitions["Start a conversation"] = "Start een onderwerp";
$definitions["Start a new conversation"] = "Start een nieuw onderwerp";
$definitions["Start a private conversation with %s"] = "Start een prive bericht met %s";
$definitions["Start Conversation"] = "Start onderwerp";
$definitions["Starting a conversation"] = "Start een onderwerp";
$definitions["Statistics"] = "Statistieken";
$definitions["statistic.conversation.plural"] = "%s onderwerpen";
$definitions["statistic.conversation"] = "%s onderwerp";
$definitions["statistic.member.plural"] = "%s leden";
$definitions["statistic.member"] = "%s lid";
$definitions["statistic.online.plural"] = "%s online";
$definitions["statistic.online"] = "%s online";
$definitions["statistic.post.plural"] = "%s berichten";
$definitions["statistic.post"] = "%s bericht";
$definitions["Sticky"] = "Sticky";
$definitions["Subscribe"] = "Aanmelden";
$definitions["Subscribed"] = "Aangemeld";
$definitions["Subscription"] = "Aanmelding";
$definitions["Success!"] = "Gelukt!";
$definitions["Suspend member"] = "Deactiveer lid";
$definitions["Suspend members."] = "Deactiveer leden.";
$definitions["Suspend"] = "Deactiveer";

$definitions["To get started with your forum, you might like to:"] = "Om te beginnen met het forum wil je wellicht het volgende:";

$definitions["Unhide"] = "Toon";
$definitions["Uninstall"] = "Deïnstalleren";
$definitions["Unlock"] = "Open";
$definitions["Unmute conversation"] = "Dempen opheffen";
$definitions["Unstarred"] = "Niet gevolgd";
$definitions["Unsticky"] = "Unsticky";
$definitions["Unsubscribe new users by default"] = "Schrijf nieuwe leden automatisch uit";
$definitions["Unsubscribe"] = "Afmelden";
$definitions["Unsubscribed"] = "Afgemeld";
$definitions["Unsuspend member"] = "Heractiveer lid";
$definitions["Unsuspend"] = "Heractiveer";
$definitions["Until someone replies"] = "Totdat iemand reageert";
$definitions["Untitled conversation"] = "Onderwerp zonder titel";
$definitions["Upgrade esoTalk"] = "Upgrade esoTalk";
$definitions["Use a background image"] = "Gebruik een achtergrond afbeelding";
$definitions["Use for mobile"] = "Gebruik voor mobiel";
$definitions["Use friendly URLs"] = "Gebruik vriendelijke URLs";
$definitions["Used to verify your account and subscribe to conversations"] = "Benodigt om je account te bevestigen en voor notificaties";
$definitions["Username"] = "Gebruikersnaam";
$definitions["Username or Email"] = "Gebruikersnaam of Email";

$definitions["View %s's profile"] = "Bekijk %s's profiel";
$definitions["View all notifications"] = "Bekijk alle notificaties";
$definitions["View more"] = "Bekijk meer";
$definitions["View your profile"] = "Bekijk je profiel";
$definitions["View"] = "Bekijk";
$definitions["Viewing: %s"] = "Bekijkt: %s";
$definitions["viewingPosts"] = "<b>%s-%s</b> of %s berichten";

$definitions["Warning"] = "Oh oh, er gaat iets niet goed!";
$definitions["Welcome to esoTalk!"] = "Welkom op esoTalk!";
$definitions["We've logged you in and taken you straight to your forum's administration panel. You're welcome."] = "We hebben je ingelogd en direct doorverwezen naar het administratie paneel. Geen dank.";
$definitions["Write a reply..."] = "Schrijf een reactie...";

$definitions["Yes"] = "Ja";
$definitions["You can manage channel-specific permissions on the channels page."] = "Je kan kanaal specifieke permissies instellen op de kanaal pagina.";
$definitions["Your current password"] = "Je huidige wachtwoord";


// Messages.
$definitions["message.404"] = "Oh dear - the page you requested could not be found! Try going back and clicking a different link. Or something else.";
$definitions["message.ajaxDisconnected"] = "Unable to communicate with the server. Wait a few seconds and <a href='javascript:jQuery.ETAjax.resumeAfterDisconnection()'>try again</a>, or <a href='' onclick='window.location.reload();return false'>refresh the page</a>.";
$definitions["message.ajaxRequestPending"] = "Hey! We're still processing some of your stuff! If you navigate away from this page you might lose any recent changes you've made, so wait a few seconds, ok?";
$definitions["message.attachmentUploadError"] = "test";
$definitions["message.avatarError"] = "There was a problem uploading your avatar. Make sure you're using a valid image type (like .jpg, .png, or .gif) and the file isn't really really huge.";
$definitions["message.cannotDeleteLastChannel"] = "Hey, wait up, you can't delete the last channel! Where would your conversations go? That's just silly.";
$definitions["message.cannotEditSinceReply"] = "You can't edit your post because someone has replied since you posted it.";
$definitions["message.changesSaved"] = "Je aanpassingen zijn opgeslagen.";
$definitions["message.channelsHelp"] = "Kanalen worden gebruikt als categorieën binnen het forum. Je kan zoveel kanalen maken als nodig en ze rangschikken naar wens door ze hieronder te slepen en neer te zetten.";
$definitions["message.channelSlugTaken"] = "This slug is already in use by another channel.";
$definitions["message.confirmDelete"] = "Are you sure you want to delete this? Seriously, you won't be able to get it back.";
$definitions["message.confirmDiscardReply"] = "You have not saved your reply as a draft. Do you wish to discard it?";
$definitions["message.confirmEmail"] = "Before you can start using your newly-created account, you'll need to confirm your email address. Within the next minute or two you should receive an email from us containing a link to activate your account.";
$definitions["message.confirmLeave"] = "Woah, you haven't saved the stuff you are editing! If you leave this page, you'll lose any changes you've made. Is this ok?";
$definitions["message.connectionError"] = "esoTalk could not connect to the MySQL server. The error returned was:<br/>%s";
$definitions["message.conversationDeleted"] = "The conversation was deleted. Didn't that feel good?";
$definitions["message.conversationNotFound"] = "For some reason this conversation cannot be viewed. It may not exist, or you may not have permission to view it.";
$definitions["message.cookieAuthenticationTheft"] = "For security reasons, we couldn't log you in with your 'remember me' cookie. Please log in manually!";
$definitions["message.deleteChannelHelp"] = "Woah, hold up there! If you delete this channel, there'll be no way to get it back. Unless you build a time machine. But, uh, there'll be no <em>easy</em> way to get it back. All of the conversations in this channel can be moved to another of your choice.";
$definitions["message.emailConfirmed"] = "Hoi! Je account is gevalideerd en je kunt nu deelnemen aan de gesprekken. Of start zelf <a href='".URL("conversation/start")."'>een onderwerp</a>.";
$definitions["message.emailDoesntExist"] = "That email address doesn't match any members in the database. Did you make a typo?";
$definitions["message.emailNotYetConfirmed"] = "You need to confirm your email before you can log in with it! If you didn't receive the confirmation email, <a href='%s'>click here to get it sent again</a>.";
$definitions["message.emailTaken"] = "Curses, there is already a member with this email!";
$definitions["message.empty"] = "You must fill out this field.";
$definitions["message.emptyPost"] = "Yeah... uh, you should probably type something in your post.";
$definitions["message.emptyTitle"] = "The title of your conversation can't be blank. I mean, how can anyone click on a blank title? Think about it.";
$definitions["message.esoTalkAlreadyInstalled"] = "<strong>esoTalk is already installed.</strong><br/><small>To reinstall esoTalk, you must remove <strong>config/config.php</strong>.</small>";
$definitions["message.esoTalkUpdateAvailable"] = "A new version of esoTalk, %s, is now available.";
$definitions["message.esoTalkUpdateAvailableHelp"] = "It's recommended to always have the latest version of esoTalk installed to reduce security risk. And hey, there might be some cool new features!";
$definitions["message.esoTalkUpToDate"] = "Your version of esoTalk is up-to-date.";
$definitions["message.esoTalkUpToDateHelp"] = "I'm a poor college student who has spent many hundreds of hours developing esoTalk. If you like it, please consider <a href='%s' target='_blank'>donating</a>.";
$definitions["message.fatalError"] = "<p>esoTalk has encountered an nasty error which is making it impossible to do whatever it is that you're doing. But don't feel down - <strong>here are a few things you can try</strong>:</p>\n<ul>\n<li>Go outside, walk the dog, have a coffee... then <strong><a href='%1\$s'>try again</a></strong>!</li>\n<li>If you are the forum administrator, then you can <strong>get help on the <a href='%2\$s'>esoTalk website</a></strong>.</li>\n<li>Try hitting the computer - that sometimes works for me.</li>\n</ul>";
$definitions["message.fatalErrorInstaller"] = "<p>esoTalk has encountered an nasty error which is making it impossible to do whatever it is that you're doing. But don't feel down - <strong>here are a few things you can try</strong>:</p>\n<ul>\n<li><p><strong>Try again.</strong> Everyone makes mistakes - maybe the computer made one this time!</p></li>\n<li><p><strong>Go back and check your settings.</strong> In particular, make sure your database information is correct.</p></li>\n<li><p><strong>Get help.</strong> Go on the <a href='%s'>esoTalk support forum</a> and search to see if anyone else is having the same problem as you are. If not, start a new conversation about your problem, including the error details below.</p></li>\n</ul>";
$definitions["message.fatalErrorUpgrader"] = "<p>esoTalk has encountered an nasty error which is making it impossible to do whatever it is that you're doing. But don't feel down - <strong>here are a few things you can try</strong>:</p>\n<ul>\n<li><p><strong>Try again.</strong> Everyone makes mistakes - maybe the computer made one this time!</p></li>\n<li><p><strong>Get help.</strong> Go on the <a href='%s'>esoTalk support forum</a> and search to see if anyone else is having the same problem as you are. If not, start a new conversation about your problem, including the error details below.</p></li>\n</ul>";
$definitions["message.fileUploadFailed"] = "Something went wrong and the file you selected could not be uploaded. Perhaps it's too big, or in the wrong format?";
$definitions["message.fileUploadFailedMove"] = "The file you uploaded could not be copied to its destination. Please contact the forum administrator.";
$definitions["message.fileUploadNotImage"] = "The file you uploaded is not an image in an acceptable format.";
$definitions["message.fileUploadTooBig"] = "The file you selected could not be uploaded because it is too big.";
$definitions["message.forgotPasswordHelp"] = "So, you forgot your password! Don't worry, it happens all the time. Simply enter your email address and we'll send you instructions on how to set up a new one.";
$definitions["message.fulltextKeywordWarning"] = "Note that keywords less than 4 characters in length, and common English words such as 'the' and 'for', aren't included in the search criteria.";
$definitions["message.gambitsHelp"] = "Gambits are phrases that describe what you are looking for. Click on a gambit to insert it into the search field. Double-click on a gambit to instantly search for it. Normal search keywords work too!";
$definitions["message.gdNotEnabledWarning"] = "The <strong>GD extension</strong> is not enabled.<br/><small>This is required to resize and save avatars. Get your host or administrator to install/enable it.</small>";
$definitions["message.greaterMySQLVersionRequired"] = "You must have <strong>MySQL 4 or greater</strong> installed and the <a href='http://php.net/manual/en/mysql.installation.php' target='_blank'>MySQL extension enabled in PHP</a>.<br/><small>Please install/upgrade both of these requirements or request that your host or administrator install them.</small>";
$definitions["message.greaterPHPVersionRequired"] = "Your server must have <strong>PHP 5.0.0 or greater</strong> installed to run esoTalk.<br/><small>Please upgrade your PHP installation or request that your host or administrator upgrade the server.</small>";
$definitions["message.incorrectLogin"] = "Your login details were incorrect.";
$definitions["message.incorrectPassword"] = "Your current password is incorrect.";
$definitions["message.installerAdminHelp"] = "esoTalk will use the following information to set up your administrator account on your forum.";
$definitions["message.installerFilesNotWritable"] = "esoTalk cannot write to the following files/folders: <strong>%s</strong>.<br/><small>To resolve this, you must navigate to these files/folders in your FTP client and <strong>chmod</strong> them to <strong>777</strong>.</small>";
$definitions["message.installerMySQLHelp"] = "esoTalk needs access to a MySQL database to store all your forum's data in, such as conversations and posts. If you're unsure of any of these details, you may need to ask your hosting provider.";
$definitions["message.installerWelcome"] = "<p>Welcome to the esoTalk installer! We need a few details from you so we can get your forum set up and ready to go.</p>\n<p>If you have any trouble, get help on the <a href='%s'>esoTalk support forum</a>.</p>";
$definitions["message.invalidChannel"] = "You selected an invalid channel!";
$definitions["message.invalidEmail"] = "Seems this email address isn't valid...";
$definitions["message.invalidUsername"] = "You must choose a username between 3 and 20 alphanumeric characters.";
$definitions["message.javascriptRequired"] = "This page requires JavaScript to function properly. Please enable it!";
$definitions["message.languageUninstalled"] = "De taal is gedeïnstalleerd.";
$definitions["message.locked"] = "Hm, looks like this conversation is <strong>locked</strong>, so you can't reply to it.";
$definitions["message.loginToParticipate"] = "To start conversations or reply to posts, please log in.";
$definitions["message.logInToReply"] = "<a href='%1\$s' class='link-login'>Log in</a> of <a href='%2\$s' class='link-join'>Meld je aan</a> om te reageren!";
$definitions["message.logInToSeeAllConversations"] = "<a href='".URL("user/login")."' class='link-login'>Log in</a> to expose some channels/conversations that may be hidden to guests.";
$definitions["message.memberNotFound"] = "Hm, there doesn't seem to be a member with that name.";
$definitions["message.memberNoPermissionView"] = "That member can't be added because they don't have permission to view the channel that this conversation is in.";
$definitions["message.nameTaken"] = "The name you have entered is taken or is a reserved word.";
$definitions["message.newSearchResults"] = "There has been new activity that has affected your search results. <a href='%s'>Refresh</a>";
$definitions["message.noActivity"] = "%s hasn't done anything on this forum yet!";
$definitions["message.noMembersOnline"] = "Er zijn momenteel geen leden online.";
$definitions["message.noNotifications"] = "Je hebt geen notificaties.";
$definitions["message.noPermission"] = "Je hebt niet genoeg rechten om deze actie uit te voeren.";
$definitions["message.noPermissionToReplyInChannel"] = "You don't have permission to reply to conversations in this channel.";
$definitions["message.noPluginsInstalled"] = "No plugins are currently installed.";
$definitions["message.noSearchResults"] = "No conversations matching your search were found.";
$definitions["message.noSearchResultsMembers"] = "No members matching your search were found.";
$definitions["message.noSearchResultsPosts"] = "No posts matching your search were found.";
$definitions["message.noSkinsInstalled"] = "No skins are currently installed.";
$definitions["message.notWritable"] = "<code>%s</code> is not writeable. Try <code>chmod</code>ing it to <code>777</code>, or if it doesn't exist, <code>chmod</code> the folder it is contained within.";
$definitions["message.pageNotFound"] = "The page you're looking for could not be found.";
$definitions["message.passwordChanged"] = "Alright, your password has been changed. Now you can log in! Hey, try not to forget it again, OK?";
$definitions["message.passwordEmailSent"] = "Ok, we've sent you an email containing a link to reset your password. Check your spam folder if you don't receive it within the next minute or two. Yeah, some times we get put through to spam - can you believe it?!";
$definitions["message.passwordsDontMatch"] = "Je wachtwoorden komen niet overeen.";
$definitions["message.passwordTooShort"] = "Je wachtwoord is te kort.";
$definitions["message.pluginCannotBeEnabled"] = "The plugin <em>%s</em> cannot be enabled: %s";
$definitions["message.pluginDependencyNotMet"] = "To enable this plugin, you must have %s version %s installed and enabled.";
$definitions["message.pluginUninstalled"] = "De plugin is gedeïnstalleerd.";
$definitions["message.postNotFound"] = "The post you're looking for could not be found.";
$definitions["message.postTooLong"] = "Your post is really, really long! Too long! The maximum number of characters allowed is %s. That's really long!";
$definitions["message.preInstallErrors"] = "The following errors were found with your esoTalk setup. They must be resolved before you can continue the installation.";
$definitions["message.preInstallWarnings"] = "The following errors were found with your esoTalk setup. You can continue the esoTalk install without resolving them, but some esoTalk functionality may be limited.";
$definitions["message.reduceNumberOfGambits"] = "Reduce the number of gambits or search keywords you're using to find a broader range of conversations.";
$definitions["message.registerGlobalsWarning"] = "PHP's <strong>register_globals</strong> setting is enabled.<br/><small>While esoTalk can run with this setting on, it is recommended that it be turned off to increase security and to prevent esoTalk from having problems.</small>";
$definitions["message.registrationClosed"] = "Registration on this forum is not open to the public.";
$definitions["message.removeDirectoryWarning"] = "Hey! Looks like you haven't deleted the <code>%s</code> directory like we told you to! You probably should, just to make sure those hackers can't do anything naughty.";
$definitions["message.safeModeWarning"] = "<strong>Safe mode</strong> is enabled.<br/><small>This could potentially cause problems with esoTalk, but you can still proceed if you cannot turn it off.</small>";
$definitions["message.searchAllConversations"] = "Try searching for this term across all conversations.";
$definitions["message.setNewPassword"] = "Alright! Now, what do you want your new password to be?";
$definitions["message.skinUninstalled"] = "De skin is gedeïnstalleerd.";
$definitions["message.suspended"] = "Ouch! A forum moderator has <strong>suspended</strong> your account. It sucks, but until the suspension is lifted you won't be able to do much around here. Hey, screw them!";
$definitions["message.suspendMemberHelp"] = "Suspending %s will prevent them from replying to conversations, starting conversations, and viewing private conversations. They will effectively have the same permissions as a guest.";
$definitions["message.tablePrefixConflict"] = "The installer has detected that there is another installation of esoTalk in the same MySQL database with the same table prefix.<br/>To overwrite this installation of esoTalk, click 'Install My Forum' again. <strong>All data will be lost.</strong><br/>If you wish to create another esoTalk installation alongside the existing one, <strong>change the table prefix</strong>.";
$definitions["message.unsuspendMemberHelp"] = "Unsuspending %s will enable them to participate in conversations on this forum again.";
$definitions["message.upgradeSuccessful"] = "esoTalk was successfully upgraded.";
$definitions["message.waitToReply"] = "You must wait at least %s seconds between starting or replying to conversations. Take a deep breath and try again.";
$definitions["message.waitToSearch"] = "Woah, slow down! Looks like you're trying to perform a few too many searches. Wait %s seconds and try again.";


// Emails.
$definitions["email.confirmEmail.body"] = "<p>Someone (hopefully you!) has signed up to the forum '%1\$s' with this email address.</p><p>If this was you, simply visit the following link and your account will be activated:<br>%2\$s</p>";
$definitions["email.confirmEmail.subject"] = "%1\$s, please confirm your email address";
$definitions["email.footer"] = "<p>(If you don't want to receive any emails like this again, you can <a href='%s'>change your notification preferences</a>.)</p>";
$definitions["email.forgotPassword.body"] = "<p>Someone (hopefully you!) has submitted a forgotten password request for your account on the forum '%1\$s'. If you do not wish to change your password, just ignore this email and nothing will happen.</p><p>However, if you did forget your password and wish to set a new one, visit the following link:<br>%2\$s</p>";
$definitions["email.forgotPassword.subject"] = "Did you forget your password, %1\$s?";
$definitions["email.header"] = "<p>Hoi %s!</p>";
$definitions["email.mention.body"] = "<p><strong>%1\$s</strong> mentioned you in a post in the conversation <strong>%2\$s</strong>.</p><hr>%3\$s<hr><p>To view the post in context, check out the following link:<br>%4\$s</p>";
$definitions["email.mention.subject"] = "%1\$s noemt je in een reactie";
$definitions["email.privateAdd.body"] = "<p>You have been added to a private conversation titled <strong>%1\$s</strong>.</p><hr>%2\$s<hr><p>To view this conversation, check out the following link:<br>%3\$s</p>";
$definitions["email.privateAdd.subject"] = "You have been added to a private conversation";
$definitions["email.post.body"] = "<p><strong>%1\$s</strong> has replied to a conversation which you followed: <strong>%2\$s</strong></p><hr>%3\$s<hr><p>To view the new activity, check out the following link:<br>%4\$s</p>";
$definitions["email.post.subject"] = "[Nieuwe reactie] %1\$s";
$definitions["email.postChannel.body"] = "<p><strong>%1\$s</strong> heeft een reactie geplaatst in een onderwerp met een kanaal dat jij volgt: <strong>%2\$s</strong></p><hr>%3\$s<hr><p>Klik op de volgende link om de reactie te bekijken:<br>%4\$s</p>";
$definitions["email.postMember.body"] = "<p><strong>%1\$s</strong> heeft een reactie geplaatst in een onderwerp: <strong>%2\$s</strong></p><hr>%3\$s<hr><p>Klik op de volgende link om de reactie te bekijken:<br>%4\$s</p>";
$definitions["email.postMember.subject"] = "Er is een nieuwe reactie door %1\$s";

// Translating the gambit system can be quite complex, but we'll do our best to get you through it. :)
// Note: Don't use any html entities in these definitions, except for: &lt; &gt; &amp; &#39;

// Simple gambits
// These gambits are pretty much evaluated as-they-are.
// tag:, author:, contributor:, and quoted: are combined with a value after the colon (:).
// For example: tag:video games, author:myself
$definitions["gambit.author:"] = "auteur:";
$definitions["gambit.contributor:"] = "poster:";
$definitions["gambit.member"] = "lid";
$definitions["gambit.myself"] = "zelf";
$definitions["gambit.draft"] = "concept";
$definitions["gambit.locked"] = "gesloten";
$definitions["gambit.order by newest"] = "sorteer op nieuwste";
$definitions["gambit.order by replies"] = "sorteer op reacties";
$definitions["gambit.private"] = "prive";
$definitions["gambit.random"] = "willekeurig";
$definitions["gambit.reverse"] = "omgekeerd";
$definitions["gambit.starred"] = "volgt";
$definitions["gambit.muted"] = "gedempt";
$definitions["gambit.sticky"] = "sticky";
$definitions["gambit.unread"] = "ongelezen";
$definitions["gambit.limit:"] = "limiet:";

// Aliases
// These are gambits which tell the gambit system to use another gambit.
// In other words, when you type "active today", the gambit system interprets it as if you typed "active 1 day".
// The first of each pair, the alias, can be anything you want.
// The second, however, must fit with the regular expression pattern defined below (more on that later.)
$definitions["gambit.active today"] = "vandaag actief"; // what appears in the gambit cloud
$definitions["gambit.active 1 day"] = "1 dag actief"; // what it actually evaluates to

$definitions["gambit.has replies"] = "heeft reacties";
$definitions["gambit.has >0 replies"] = "heeft >0 reacties";
$definitions["gambit.has >10 replies"] = "heeft >10 reacties";

$definitions["gambit.has no replies"] = "heeft geen reacties";
$definitions["gambit.has 0 replies"] = "heeft 0 reacties";

$definitions["gambit.dead"] = "verwijderd";
$definitions["gambit.active >30 day"] = "actief >30 dagen";

// Units of time
// These are used in the active gambit.
// ex. "[active] [>|<|>=|<=|last] 180 [second|minute|hour|day|week|month|year]"
$definitions["gambit.second"] = "seconde";
$definitions["gambit.minute"] = "minuten";
$definitions["gambit.hour"] = "uur";
$definitions["gambit.day"] = "dag";
$definitions["gambit.week"] = "week";
$definitions["gambit.month"] = "maand";
$definitions["gambit.year"] = "jaar";
$definitions["gambit.last"] = "laatste"; // as in "active last 180 days"
$definitions["gambit.active"] = "actief"; // as in "active last 180 days"

// Now the hard bit. This is a regular expression to test for the "active" gambit.
// The group (?<a> ... ) is the comparison operator (>, <, >=, <=, or last).
// The group (?<b> ... ) is the number (ex. 24).
// The group (?<c> ... ) is the unit of time.
// The languages of "last" and the units of time are defined above.
// However, if you need to reorder the groups, do so carefully, and make sure spaces are written as " *".
$definitions["gambit.gambitActive"] = "/^{$definitions["gambit.active"]} *(?<a>>|<|>=|<=|{$definitions["gambit.last"]})? *(?<b>\d+) *(?<c>{$definitions["gambit.second"]}|{$definitions["gambit.minute"]}|{$definitions["gambit.hour"]}|{$definitions["gambit.day"]}|{$definitions["gambit.week"]}|{$definitions["gambit.month"]}|{$definitions["gambit.year"]})/";

// These appear in the tag cloud. They must fit the regular expression pattern where the ? is a number.
// If the regular expression pattern has been reordered, these gambits must also be reordered (as well as the ones in aliases.)
$definitions["gambit.active last ? hours"] = "{$definitions["gambit.active"]} {$definitions["gambit.last"]} ? {$definitions["gambit.hour"]}s";
$definitions["gambit.active last ? days"] = "{$definitions["gambit.active"]} {$definitions["gambit.last"]} ? {$definitions["gambit.day"]}s";
$definitions["gambit.order by views"] = "sorteer op aantal keer bekeken";


// This is similar to the regular expression for the active gambit, but for the "has n reply(s)" gambit.
// Usually you just need to change the "has" and "repl".
$definitions["gambit.gambitHasNReplies"] = "/^heeft *(?<a>>|<|>=|<=)? *(?<b>\d+) *repl/";

//reCaptcha
$definitions["message.reCaptchaRefreshInfo"] = "klik op het plaatje voor een nieuwe afbeelding";
$definitions["message.invalidCaptcha"] = "Ben je een mens?";
$definitions["Are you human?"] = "Ben je een mens?";
$definitions["mlarray.reCaptcha"] = array(
	"instructions_visual" => "Voer de twee woorden in",
	//"instructions_audio" => "",
	//"play_again" => "",
	//"cant_hear_this" => "",
	//"visual_challenge" => "",
	//"audio_challenge" => "",
	"refresh_btn" => "Krijg een nieuwe afbeelding",
	//"help_btn" => "",
	//"incorrect_try_again" => ""
);
