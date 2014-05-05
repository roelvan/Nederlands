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

setlocale(LC_ALL, 'nl_NL');
// Define the character set that this language uses.
$definitions["charset"] = "utf-8";

$definitions["date.full"] = "%c"; // see http://au.php.net/manual/en/function.date.php for details

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
$definitions["%s has registered and is awaiting approval."] = "%s is geregistreerd en wacht op goedkeuring.";
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
$definitions["Admin skin"] = "Admin skin";
$definitions["Administration"] = "Administratie";
$definitions["Administrator email"] = "Beheerder email";
$definitions["Administrator password"] = "Beheerder wachtwoord";
$definitions["Administrator username"] = "Beheerder gebruikersnaam";
$definitions["Advanced options"] = "Geadvanceerde opties";
$definitions["All Channels"] = "Alle kanalen";
$definitions["Allow members to edit their own posts:"] = "Leden mogen hun eigen post bewerken:";
$definitions["Already have an account? <a href='%s' class='link-login'>Log in!</a>"] = "Al geregistreerd? <a href='%s' class='link-login'>Log in!</a>";
$definitions["Appearance"] = "Uiterlijk";
$definitions["Approve"] = "Bevestig";
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

$definitions["Can suspend/unsuspend members"] = "Kan leden deactiveren/reactiveren";
$definitions["Cancel"] = "Annuleren";
$definitions["Change"] = "Wijzig";
$definitions["Change %s's Permissions"] = "Wijzig %s's permissies";
$definitions["Change avatar"] = "Wijzig avatar";
$definitions["Change Channel"] = "Wijzig Kanaal";
$definitions["Change channel"] = "Wijzig kanaal";
$definitions["Change username"] = "Wijzig gebruikersnaam";
$definitions["Change Password or Email"] = "Wijzig wachtwoord of emailadres";
$definitions["Change Password"] = "Wijzig Wachtwoord";
$definitions["Change password"] = "Wijzig wachtwoord";
$definitions["Change permissions"] = "Wijzig rechten";
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
$definitions["Deny"] = "Deny";
$definitions["Disable"] = "Uitschakelen";
$definitions["Discard"] = "Verwijder";
$definitions["Don't allow other users to see when I am online"] = "Sta niet toe dat andere leden zien dat je online bent";
$definitions["Don't have an account? <a href='%s' class='link-join'>Sign up!</a>"] = "Nog geen account? <a href='%s' class='link-join'>Meld je aan!</a>";
$definitions["Don't repeat"] = "Niet herhalen";
$definitions["Don't require users to confirm their account"] = "Account confirmatie is niet verplicht";

$definitions["Edit Channel"] = "Bewerk kanaal";
$definitions["Edit Group"] = "Bewerk groep";
$definitions["Edit member groups"] = "Bewerk groepsleden";
$definitions["Edit your profile"] = "Bewerk je profiel";
$definitions["Edit"] = "Bewerken";
$definitions["Edited %s by %s"] = "Bewerkt %s door %s";
$definitions["Editing permissions"] = "Bewerk rechten";
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
$definitions["Filter by name or group..."] = "Filter op naam of groep...";
$definitions["Find this post"] = "Zoek deze reactie";
$definitions["First posted"] = "Eerste reactie";
$definitions["Follow"] = "Volgen";
$definitions["Following"] = "Volgend";
$definitions["Follow to receive notifications"] = "Volg om notificaties te ontvangen";
$definitions["For %s seconds"] = "Voor %s seconden";
$definitions["Forever"] = "Altijd";
$definitions["Forgot?"] = "Vergeten?";
$definitions["Forgot Password"] = "Vergeet wachtwoord";
$definitions["Forum"] = "Forum";
$definitions["Forum header"] = "Forum header";
$definitions["Forum language"] = "Forum taal";
$definitions["Forum privacy"] = "Forum privacy";
$definitions["Forum Settings"] = "Instellingen";
$definitions["Forum Statistics"] = "Forum statistieken";
$definitions["Forum title"] = "Forum titel";
$definitions["forumDescription"] = "%s is een web-forum discussie %s, en %s.";

$definitions["Give this group the 'moderate' permission on all existing channels"] = "Geef deze groep de 'moderate' permissies over alle bestaande kanalen";
$definitions["Global permissions"] = "Algemene permissies";
$definitions["Go to top"] = "Naar boven";
$definitions["Go back to the Conversation"] = "Ga terug naar het onderwerp";
$definitions["Group name"] = "Groepnaam";
$definitions["group.administrator"] = "Beheerder";
$definitions["group.administrator.plural"] = "Beheerders";
$definitions["group.guest"] = "Gast";
$definitions["group.guest.plural"] = "Gasten";
$definitions["group.member"] = "Lid";
$definitions["group.member.plural"] = "Leden";
$definitions["group.Moderator"] = "Moderator";
$definitions["group.Moderator.plural"] = "Moderators";
$definitions["group.suspended"] = "Geblokkeerd";
$definitions["Groups can be used to categorize members and give them certain privileges."] = "Groepen kunnen worden gebruikt om leden te categoriseren met bepaalde permissies.";
$definitions["Groups"] = "Groepen";
$definitions["Guests can view the:"] = "Gasten kunnen bekijken:";

$definitions["Header"] = "Header";
$definitions["Header color"] = "Headerkleur";
$definitions["Hide"] = "Verbergen";
$definitions["Home page"] = "Startpagina";
$definitions["HTML is allowed."] = "HTML is toegestaan.";

$definitions["If you run into any other problems or just want some help with the installation, feel free to ask for assistance at the <a href='%s'>esoTalk support forum</a>."] = "Mocht je tegen problemen aanlopen of wens je hulp tijdens de installatie kan je om assistentie vragen op het <a href='%s'>esoTalk support forum</a>.";
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

$definitions["Keep me logged in"] = "Onthoudt wachtwoord";
$definitions["<strong>Keep this member's posts.</strong> All of this member's posts will remain intact, but will show [deleted] as the author."] = "<strong>Behoud de berichten van dit lid.</strong> Alle berichten van dit lid blijven behouden, maar de auteur wordt weergegeven als [verwijderd].";

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

$definitions["Make member and online list visible to:"] = "Maak leden en online lijst zichtbaar voor:";
$definitions["Manage Groups"] = "Beheer groepen";
$definitions["Manage Languages"] = "Beheer talen";
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
$definitions["Members"] = "Leden";
$definitions["Members Allowed to View this Conversation"] = "Leden die permissies hebben om dit onderwerp te bekijken";
$definitions["Members Awaiting Approval"] = "Op confirmatie wachtende leden";
$definitions["Members Online"] = "Leden online";
$definitions["Members who are part of this group can be listed by searching for the group name in the member list."] = "Leden die deel uitmaken van deze groep worden weergegeven in de zoekresultaten als er gezocht wordt op de naam van de groep in de ledenlijst";
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
$definitions["New email"] = "Nieuw email";
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

$definitions["OK"] = "Ok";
$definitions["Online"] = "Online";
$definitions["online"] = "online";
$definitions["Only allow members of this group to see who else is in it"] = "Alleen leden van deze groep kunnen zien wie er nog meeer lid is van deze group";
$definitions["Open registration"] = "Open registratie";
$definitions["optional"] = "optioneel";
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
$definitions["Registration Closed"] = "Registratie gesloten";
$definitions["Remove avatar"] = "Verwijder avatar";
$definitions["Rename Member"] = "Hernoem lid";
$definitions["Reply"] = "Reageer";
$definitions["Report a bug"] = "Rapporteer een bug";
$definitions["Require administrator approval"] = "Vereist goedkeuring van de beheerder";
$definitions["Require users to confirm their email address"] = "Verplicht leden hun emailadres te valideren";
$definitions["Restore"] = "Herstel";
$definitions["restore"] = "herstel";
$definitions["Reset"] = "Opnieuw";

$definitions["Save Changes"] = "Opslaan";
$definitions["Save Draft"] = "Opslaan als concept";
$definitions["Search conversations..."] = "Zoek onderwerpen...";
$definitions["Search within this conversation..."] = "Zoek binnen onderwerp...";
$definitions["Search"] = "Zoeken";
$definitions["Searching in"] = "Zoeken in";
$definitions["See the private conversations I've had with %s"] = "Toon de prive berichten die ik heb gehad met %s";
$definitions["Set a New Password"] = "Stel een nieuwe wachtwoord in";
$definitions["Settings"] = "Instellingen";
$definitions["Show an image in the header"] = "Toon een afbeelding in de header";
$definitions["Show matching posts"] = "Toon berichten";
$definitions["Show the channel list by default"] = "Toon standaard de kanalen lijst";
$definitions["Show the conversation list by default"] = "Toon standaard de onderwerpen lijst";
$definitions["Show the forum title in the header"] = "Toon de titel in de header";
$definitions["Sign Up"] = "Aanmelden";
$definitions["Skins"] = "Skins";
$definitions["Sort By"] = "Sorteer op";
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

$definitions["Unapproved"] = "Niet toegestaan";
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
$definitions["Use for admin"] = "Gebruik voor admin";
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

$definitions["Warning"] = "Waarschuwing";
$definitions["Welcome to esoTalk!"] = "Welkom op esoTalk!";
$definitions["We've logged you in and taken you straight to your forum's administration panel. You're welcome."] = "We hebben je ingelogd en direct doorverwezen naar het administratie paneel. Geen dank.";
$definitions["Write a reply..."] = "Schrijf een reactie...";

$definitions["Yes"] = "Ja";
$definitions["You can manage channel-specific permissions on the channels page."] = "Je kan kanaal specifieke permissies instellen op de kanaal pagina.";
$definitions["Your current password"] = "Je huidige wachtwoord";


// Messages.
$definitions["message.404"] = "Sorry, deze pagina is helaas niet meer beschikbaar...";
$definitions["message.accountNotYetApproved"] = "De beheerder heeft je account nog niet bevestigd. Geduld is een schone zaak!";
$definitions["message.ajaxDisconnected"] = "Het is niet mogelijk om met de server te communiceren. Wacht een aantal seconden en <a href='javascript:jQuery.ETAjax.resumeAfterDisconnection()'>probeer het opnieuw</a>, of <a href='' onclick='window.location.reload();return false'>ververs de pagina</a>.";
$definitions["message.ajaxRequestPending"] = "Hey! We zijn nog niet helemaal klaar met vewerken! Als je nu de pagina verlaat verlies je al je wijzigingen, dus wacht een paar seconden. Ok?";
$definitions["message.avatarError"] = "Er is een probleem opgetreden met het uploaden van je avatar. Controleer of het bestandstype de juiste is (zoals .jpg, .png, of .gif) en of hij niet een bizar groot formaat heeft.";
$definitions["message.cannotDeleteLastChannel"] = "Hey, wacht even! Het is niet mogelijk het laatste kanaal te verwijderen. Waar moeten de onderwerpen dan in geplaatst worden?";
$definitions["message.cannotEditSinceReply"] = "Je kan je reactie niet meer bewerken omdat er inmiddels iemand anders een reactie heeft achter gelaten.";
$definitions["message.changesSaved"] = "Je aanpassingen zijn opgeslagen.";
$definitions["message.channelsHelp"] = "Kanalen worden gebruikt als categorieën binnen het forum. Je kan zoveel kanalen maken als nodig en ze rangschikken naar wens door ze hieronder te slepen en neer te zetten.";
$definitions["message.channelSlugTaken"] = "Deze slug wordt al gebruikt door een ander kanaal";
$definitions["message.confirmDelete"] = "Weet je zeker dat je dit wilt verwijderen?";
$definitions["message.confirmDiscardReply"] = "Je hebt je bericht nog niet opgeslagen als concept. Weet je zeker dat je hem wilt verwijderen?";
$definitions["message.confirmEmail"] = "Voordat je je nieuwe account kan gebruiken, moet je eerst je emailadres bevestigen. Je ontvangt binnen nu en twee minuten een email met een link waarmee je je account kan activeren.";
$definitions["message.confirmLeave"] = "Let op! Je hebt je wijzigingen niet opgeslagen! Als je nu de pagina verlaat verlies je al je wijzigingen. Weet je het zeker?";
$definitions["message.connectionError"] = "esoTalk kon geen verbinding maken met de MySQL server. We hebben de volgende error ontvangen:<br/>%s";
$definitions["message.conversationDeleted"] = "Het onderwerp is verwijderd.";
$definitions["message.conversationNotFound"] = "Het was niet mogelijk dit onderwerp te openen. Wellicht bestaat hij niet (meer), of je hebt geen rechten om hem te bekijken.";
$definitions["message.cookieAuthenticationTheft"] = "Om veiligheidsredenen kunnen we je niet inloggen met je 'onthoud mij' cookie. Log alsjeblieft handmatig in!";
$definitions["message.deleteChannelHelp"] = "Woah, wacht even! Als je dit kanaal verwijderd is er geen weg meer terug. Er is geen <em>makkelijke</em> manier om hem terug te krijgen. Alle onderwerpen in dit kanaal kunnen worden verplaatst naar een ander kanaal naar keuze.";
$definitions["message.emailConfirmed"] = "Hoi! Je account is gevalideerd en je kunt nu deelnemen aan de gesprekken. Of start zelf <a href='".URL("conversation/start")."'>een onderwerp</a>.";
$definitions["message.emailDoesntExist"] = "Dit emailadres is niet bekend, wellicht een typefout gemaakt?";
$definitions["message.emailNotYetConfirmed"] = "Je moet je emailadres bevestigen voordat je ermee in kan loggen!<a href='%s'>Klik hier</a> om de confirmatie email opnieuw te sturen.";
$definitions["message.emailTaken"] = "Vreemd, er is al een lid met dit emailadres!";
$definitions["message.empty"] = "Dit veld is verplicht.";
$definitions["message.emptyPost"] = "Tja, het is wel handig als je iets in je reactie schijft he...";
$definitions["message.emptyTitle"] = "De titel van het onderwerp kan niet leeg zijn. Hoe moet men er dan op klikken?.";
$definitions["message.esoTalkAlreadyInstalled"] = "<strong>esoTalk is already installed.</strong><br/><small>To reinstall esoTalk, you must remove <strong>config/config.php</strong>.</small>";
$definitions["message.esoTalkUpdateAvailable"] = "Een nieuwe versie van esoTalk, %s, is nu beschikbaar.";
$definitions["message.esoTalkUpdateAvailableHelp"] = "It's recommended to always have the latest version of esoTalk installed to reduce security risk. And hey, there might be some cool new features!";
$definitions["message.esoTalkUpToDate"] = "Je versie van esoTalk is up-to-date.";
$definitions["message.esoTalkUpToDateHelp"] = "I'm a poor college student who has spent many hundreds of hours developing esoTalk. If you like it, please consider <a href='%s' target='_blank'>donating</a>.";
$definitions["message.fatalError"] = "esoTalk has encountered a fatal error. Try again, or <a href='%1\$s'>get help</a>.";
$definitions["message.fatalErrorInstaller"] = "<p>esoTalk has encountered an nasty error which is making it impossible to do whatever it is that you're doing. But don't feel down - <strong>here are a few things you can try</strong>:</p>\n<ul>\n<li><p><strong>Try again.</strong> Everyone makes mistakes - maybe the computer made one this time!</p></li>\n<li><p><strong>Go back and check your settings.</strong> In particular, make sure your database information is correct.</p></li>\n<li><p><strong>Get help.</strong> Go on the <a href='%s'>esoTalk support forum</a> and search to see if anyone else is having the same problem as you are. If not, start a new conversation about your problem, including the error details below.</p></li>\n</ul>";
$definitions["message.fatalErrorUpgrader"] = "<p>esoTalk has encountered an nasty error which is making it impossible to do whatever it is that you're doing. But don't feel down - <strong>here are a few things you can try</strong>:</p>\n<ul>\n<li><p><strong>Try again.</strong> Everyone makes mistakes - maybe the computer made one this time!</p></li>\n<li><p><strong>Get help.</strong> Go on the <a href='%s'>esoTalk support forum</a> and search to see if anyone else is having the same problem as you are. If not, start a new conversation about your problem, including the error details below.</p></li>\n</ul>";
$definitions["message.fileUploadFailed"] = "Er is iets mis gegaan tijdens het uploaden. Wellicht is het bestand te groot of heeft het niet het juiste bestandstype?";
$definitions["message.fileUploadFailedMove"] = "Het bestand wat je hebt geupload kan niet worden gekopieerd naar de juiste locatie. Neem contact op met de forum beheerdes.";
$definitions["message.fileUploadNotImage"] = "Het bestand wat je probeert te uploaden is geen afbeelding of ander toegestaan formaat.";
$definitions["message.fileUploadTooBig"] = "Het bestand kon niet worden geupload omdat hij te groot is.";
$definitions["message.forgotPasswordHelp"] = "Dus je bent je wachtwoord vergeten! Geen paniek, het gebeurd wel vaker. Vul je emailadres is en we sturen je instructies met hoe je je wachtwoord opnieuw kan instellen.";
$definitions["message.fulltextKeywordWarning"] = "Let op dat zoektermen korter dan 4 karakters en lidwoorden zoals 'de' en 'het', niet worden gebruikt.";
$definitions["message.gambitsHelp"] = "Gambits zijn uitdrukkingen die beschrijven wat je zoekt. Klik op een gambit om deze te gebruiken in het zoekveld. Dubbelklik om direct naar een gambit te zoeken. Normale zoektermen werken uiteraard ook!";
$definitions["message.gdNotEnabledWarning"] = "De <strong>GD extensie</strong> is niet geactiveerd.<br/><small>Deze is benodigd om avatars te wijzigen en op te slaan. Vraag je webmaster om deze te installeren/activeren.</small>";
$definitions["message.greaterMySQLVersionRequired"] = "You must have <strong>MySQL 4 or greater</strong> installed and the <a href='http://php.net/manual/en/mysql.installation.php' target='_blank'>MySQL extension enabled in PHP</a>.<br/><small>Please install/upgrade both of these requirements or request that your host or administrator install them.</small>";
$definitions["message.greaterPHPVersionRequired"] = "Your server must have <strong>PHP 5.0.0 or greater</strong> installed to run esoTalk.<br/><small>Please upgrade your PHP installation or request that your host or administrator upgrade the server.</small>";
$definitions["message.incorrectLogin"] = "Je inlog gegevens zijn niet correct.";
$definitions["message.incorrectPassword"] = "Je huidige wachtwoord is niet correct.";
$definitions["message.installerAdminHelp"] = "esoTalk will use the following information to set up your administrator account on your forum.";
$definitions["message.installerFilesNotWritable"] = "esoTalk cannot write to the following files/folders: <strong>%s</strong>.<br/><small>To resolve this, you must navigate to these files/folders in your FTP client and <strong>chmod</strong> them to <strong>777</strong>.</small>";
$definitions["message.installerMySQLHelp"] = "esoTalk needs access to a MySQL database to store all your forum's data in, such as conversations and posts. If you're unsure of any of these details, you may need to ask your hosting provider.";
$definitions["message.installerWelcome"] = "<p>Welcome to the esoTalk installer! We need a few details from you so we can get your forum set up and ready to go.</p>\n<p>If you have any trouble, get help on the <a href='%s'>esoTalk support forum</a>.</p>";
$definitions["message.invalidChannel"] = "Je hebt een niet geldig kanaal geselecteerd!";
$definitions["message.invalidEmail"] = "Dit emailadres is niet geldig...";
$definitions["message.invalidUsername"] = "Je gebruikersnaam moet tussen de 3 en 20 karakters lang zijn.";
$definitions["message.javascriptRequired"] = "Als je deze pagina correct wilt weergeven, moet je JavaScript ingeschakelen in je browser.";
$definitions["message.languageUninstalled"] = "De taal is gedeïnstalleerd.";
$definitions["message.locked"] = "Hm, dit onderwerp lijkt <strong>gesloten</strong>, dus het is niet mogelijk om er in te reageren.";
$definitions["message.loginToParticipate"] = "Log in om een reactie te geven of om een onderwerp te starten.";
$definitions["message.logInToReply"] = "<a href='%1\$s' class='link-login'>Log in</a> of <a href='%2\$s' class='link-join'>Meld je aan</a> om te reageren!";
$definitions["message.logInToSeeAllConversations"] = "<a href='".URL("user/login")."' class='link-login'>Log in</a> om alle kanalen/onderwerpen te zien die niet zichtbaar zijn voor gasten.";
$definitions["message.memberNotFound"] = "Hm, er is geen lid met deze naam bekend.";
$definitions["message.memberNoPermissionView"] = "Dit lid kan niet worden toegevoegd omdat deze geen rechten heeft tot dit kanaal.";
$definitions["message.nameTaken"] = "De naam die je hebt opgegeven is al vergeven of is een gereserveerd woord.";
$definitions["message.newSearchResults"] = "Er hebben zich nieuwe activiteiten voorgedaan die je zoekresultaten beinvloeden. <a href='%s'>Ververs</a>";
$definitions["message.noActivity"] = "%s heeft nog activiteit op dit forum!";
$definitions["message.noChannels"] = "Geen kanalen zichtbaar.";
$definitions["message.noMembersOnline"] = "Er zijn momenteel geen leden online.";
$definitions["message.noNotifications"] = "Je hebt geen notificaties.";
$definitions["message.noPermission"] = "Je hebt niet genoeg rechten om deze actie uit te voeren.";
$definitions["message.noPermissionToReplyInChannel"] = "Je hebt geen rechten om een reactie in dit kanaal te geven.";
$definitions["message.noPluginsInstalled"] = "Er zijn momenteel geen plugins geinstalleerd.";
$definitions["message.noSearchResults"] = "Er zijn geen onderwerpen gevonden die aan je zoekopdracht voldoen.";
$definitions["message.noSearchResultsMembers"] = "Er zijn geen leden gevonden die aan je zoekopdracht voldoen.";
$definitions["message.noSearchResultsPosts"] = "Er zijn geen reacties gevonden die aan je zoekopdracht voldoen.";
$definitions["message.noSkinsInstalled"] = "Er zijn momenteel geen skins geinstalleerd.";
$definitions["message.notWritable"] = "<code>%s</code> is not writeable. Try <code>chmod</code>ing it to <code>777</code>, or if it doesn't exist, <code>chmod</code> the folder it is contained within.";
$definitions["message.pageNotFound"] = "De pagina kon niet gevonden worden.";
$definitions["message.passwordChanged"] = "Je wachtwoord is aangepast. Nu kan je inloggen! Enne, probeer hem nu niet meer te vergeten, ok?";
$definitions["message.passwordEmailSent"] = "Ok, we hebben je een email met daarin een link gestuurd waarmee je je wachtwoord opnieuw kan instellen. Controleer ook je spam folder als je hem binnen nu en twee minuten niet hebt ontvangen. Helaas worden ook onze emails soms als spam gemarkeerd, ongeloofelijk he?!";
$definitions["message.passwordsDontMatch"] = "Je wachtwoorden komen niet overeen.";
$definitions["message.passwordTooShort"] = "Je wachtwoord is te kort.";
$definitions["message.pluginCannotBeEnabled"] = "De plugin <em>%s</em> kan niet worden geactiveerd: %s";
$definitions["message.pluginDependencyNotMet"] = "Om deze plugin te activeren moet je %s versie %s geinstalleerd en geactiveerd hebben.";
$definitions["message.pluginUninstalled"] = "De plugin is gedeïnstalleerd.";
$definitions["message.postNotFound"] = "De reactie die je zoekt kan niet worden gevonden.";
$definitions["message.postTooLong"] = "Je reactie is wel erg lang, eigenlijk veel te lang! Het maximum aantal karakters is %s. Dat is lang genoeg!";
$definitions["message.preInstallErrors"] = "The following errors were found with your esoTalk setup. They must be resolved before you can continue the installation.";
$definitions["message.preInstallWarnings"] = "The following errors were found with your esoTalk setup. You can continue the esoTalk install without resolving them, but some esoTalk functionality may be limited.";
$definitions["message.reduceNumberOfGambits"] = "Verminder het aantal gambits of zoektermen om in groter aantal onderwerpen te doorzoeken.";
$definitions["message.registerGlobalsWarning"] = "PHP's <strong>register_globals</strong> setting is enabled.<br/><small>While esoTalk can run with this setting on, it is recommended that it be turned off to increase security and to prevent esoTalk from having problems.</small>";
$definitions["message.registrationClosed"] = "Dit is een gesloten forum. Registratie voor dit forum is niet mogelijk.";
$definitions["message.removeDirectoryWarning"] = "Hey! Looks like you haven't deleted the <code>%s</code> directory like we told you to! You probably should, just to make sure those hackers can't do anything naughty.";
$definitions["message.safeModeWarning"] = "<strong>Safe mode</strong> is enabled.<br/><small>This could potentially cause problems with esoTalk, but you can still proceed if you cannot turn it off.</small>";
$definitions["message.searchAllConversations"] = "Probeer dit zoekterm door alle onderwerpen.";
$definitions["message.setNewPassword"] = "Ok! Wat mag het nieuwe wachtwoord worden?";
$definitions["message.skinUninstalled"] = "De skin is gedeïnstalleerd.";
$definitions["message.suspended"] = "Blegh! Een forum moderator heeft je account <strong>gedeactiveerd</strong>. Balen, want totdat je account weer geactiveerd wordt valt er vrij weinig te doen hier.";
$definitions["message.suspendMemberHelp"] = "%s deactiveren zorgt ervoor dat hij niet meer kan reageren op onderwerpen, geen onderwerpen meer kan starten of priveberichten meer kan bekijken. Feitelijk heeft hij hierdoor dezelfde rechten als een gast.";
$definitions["message.tablePrefixConflict"] = "The installer has detected that there is another installation of esoTalk in the same MySQL database with the same table prefix.<br/>To overwrite this installation of esoTalk, click 'Install My Forum' again. <strong>All data will be lost.</strong><br/>If you wish to create another esoTalk installation alongside the existing one, <strong>change the table prefix</strong>.";
$definitions["message.unsuspendMemberHelp"] = "%s heractiveren zorgt ervoor dat hij weer kan deelnemen aan de onderwerpen op dit forum.";
$definitions["message.upgradeSuccessful"] = "esoTalk is succesvol geupgrade.";
$definitions["message.waitForApproval"] = "Voordat je je account kunt gebruiken moet een beheerder deze eerst goedkeuren. We sturen je een email zodra je account is goedgekeurd!";
$definitions["message.waitToReply"] = "Je moet even %s seconden wachten voordat je een nieuw onderwerp kan starten of een reactie kan plaatsen.";
$definitions["message.waitToSearch"] = "Rustig aan! Je voert iets te vaak zoekopdrachten uit. Wacht even %s seconden en probeer het opnieuw.";


// Emails.
$definitions["email.header"] = "<p>Hoi %s!</p>";
$definitions["email.footer"] = "<p>(Als je geen emails meer van ons wilt ontvangen kan je dit in je <a href='%s'>notificatie instellingen aanpassen</a>.)</p>";

$definitions["email.confirmEmail.subject"] = "%1\$s, bevestig alsjeblieft je emailadres";
$definitions["email.confirmEmail.body"] = "<p>Iemand (hopelijk jijzelf!) heeft zicht aangemeld voor het forum '%1\$s' met dit emailadres.</p><p>Als jij dit bent geweest kan je op onderstaande link klikken om je account te activeren:<br>%2\$s</p>";

$definitions["email.approved.subject"] = "%1\$s, your account has been approved";
$definitions["email.approved.body"] = "<p>Your account on %1\$s has been approved.</p><p>Visit the following link to log in and start talking:<br>%2\$s</p>";

$definitions["email.forgotPassword.subject"] = "Ben je je wachtwoord vergeten, %1\$s?";
$definitions["email.forgotPassword.body"] = "<p>Iemand (hopelijk jijzelf!) heeft aangeven dat je het wachtwoord wilt wijzigen voor het forum '%1\$s'. Als dit niet het geval is kan je deze email als niet verzonden beschouwen.</p><p>Als je wel je wachtwoord wilt wijzigen klik je op onderstaande link:<br>%2\$s</p>";

$definitions["email.mention.subject"] = "%1\$s noemt je in een reactie";
$definitions["email.mention.body"] = "<p><strong>%1\$s</strong> noemt je in een reactie binnen het onderwerp <strong>%2\$s</strong>.</p><hr>%3\$s<hr><p>Klik op de volgende link om de reactie te bekijken:<br>%4\$s</p>";

$definitions["email.privateAdd.subject"] = "Je bent toegevoegd aan een privebericht";
$definitions["email.privateAdd.body"] = "<p>Je bent toegevoegd aan een privebericht met als onderwerp <strong>%1\$s</strong>.</p><hr>%2\$s<hr><p>Klik op de volgende link om het bericht te bekijken:<br>%3\$s</p>";

$definitions["email.post.subject"] = "[Nieuwe reactie] %1\$s";
$definitions["email.post.body"] = "<p><strong>%1\$s</strong> heeft een reactie geplaatst in een onderwerp dat je volgt: <strong>%2\$s</strong></p><hr>%3\$s<hr><p>Klik op de volgende link om de reactie te bekijken:<br>%4\$s</p>";


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

// This is similar to the regular expression for the active gambit, but for the "has n reply(s)" gambit.
// Usually you just need to change the "has" and "repl".
$definitions["gambit.gambitHasNReplies"] = "/^heeft *(?<a>>|<|>=|<=)? *(?<b>\d+) *repl/";
