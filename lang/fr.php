<?php

if (! isset ($this->lang_hash['fr'])) {
	$this->lang_hash['fr'] = array ();
}

$this->lang_hash['fr'] = array_merge (
	$this->lang_hash['fr'],
	array (
		'Accordion' => 'Accordéon',
		'Home' => 'Accueil',
		'Add Learner' => 'Ajouter un apprenant',
		'Add content' => 'Ajouter un contenu',
		'Add Course' => 'Ajouter un cours',
		'Add Category' => 'Ajouter une catégorie',
		'Add Page' => 'Ajouter une page',
		'Add a question' => 'Ajouter une question',
		'Cancel' => 'Annuler',
		'Learner' => 'Apprenant',
		'Learner added.' => 'Apprenant ajouté.',
		'Learner removed.' => 'Apprenant enlevé.',
		'Learners' => 'Apprenants',
		'None' => 'Aucun',
		'No courses available at this time.' => 'Aucun cours disponible pour l&apos;instant.',
		'No course specified' => 'Aucun cours spécifié',
		'Audio' => 'Audio',
		'Draft' => 'Brouillon',
		'This is a preview of how your page content will appear.' => 'C&apos;est un aperçu de ce à quoi votre page va ressembler.',
		'Checkboxes' => 'Cases à cocher',
		'Category' => 'Catégorie',
		'Loading...' => 'Chargement...',
		'Choose a file' => 'Choisir un fichier',
		'Choose an image' => 'Choisissez une image',
		'Choose a video' => 'Choisissez une vidéo',
		'Choices (one per line)' => 'Choix (un par ligne)',
		'Multiple choice' => 'Choix multiple',
		'Click-to-reveal' => 'Clic-pour-découvrir',
		'Click to edit' => 'Cliquez pour modifier',
		'Click to expand' => 'Cliquez pour étendre',
		'HTML code' => 'Code HTML',
		'Comments' => 'Commentaires',
		'Content' => 'Contenu',
		'Contents' => 'Contenus',
		'Email instructor' => 'Courriel instructeur',
		'Courses' => 'Cours',
		'Course' => 'Cours',
		'Course added.' => 'Cours ajouté.',
		'Course not found' => 'Cours introuvable',
		'Course deleted.' => 'Cours supprimé.',
		'Description' => 'Description',
		'Availability' => 'Disponibilité',
		'Definition' => 'Définition',
		'Sorry, but instructors cannot submit answers.' => 'Désolé, mais les instructeurs ne peuvent répondre.',
		'Details' => 'Détails',
		'Clear' => 'Effacer',
		'Saving...' => 'En cours...',
		'Remove' => 'Enlever',
		'Saving new order...' => 'Enregistre le nouvel ordre...',
		'Save Course' => 'Enregistrer le cours',
		'Send message' => 'Envoyer le message',
		'Email the instructor' => 'Envoyer un courriel à l&apos;instructeur',
		'There was an error in the course registration. Please try again later.' => 'Erreur lors de l&apos;inscription. Veuillez réessayer plus tard.',
		'File' => 'Fichier',
		'File download' => 'Fichier à télécharger',
		'Learner Contact Form' => 'Formulaire de contact de l&apos;apprenant',
		'Drag and drop to re-order your page content.' => 'Glissez/déplacer pour réordonner le contenu de votre page.',
		'Drag and drop to re-order categories:' => 'Glissez/déplacer pour réordonner les catégories :',
		'Drag and drop to re-order pages in this course:' => 'Glissez/déplacer pour réordonner les pages du cours :',
		'Glossary' => 'Glossaire',
		'Free' => 'Gratuit',
		'Free with registration' => 'Gratuit avec inscription',
		'Image' => 'Image',
		'Failed to send email. Please try again later.' => 'Impossible d&apos;envoyer le courriel. Veuillez réessayer plus tard.',
		'Incomplete' => 'Incomplet',
		'Instructor' => 'Instructeur',
		'The page you requested could not be found.' => 'La page que vous avez demandée est introuvable.',
		'The course you requested could not be found.' => 'Le cours demandé est introuvable.',
		'The link you requested is invalid.' => 'Le lien demandé n&apos;est pas valide.',
		'Instructor Links' => 'Liens instructeur',
		'Thumbnail (optional)' => 'Miniature (optionnelle)',
		'Editing Page' => 'Modification de la page',
		'Edit course' => 'Modifier le cours',
		'Modify courses' => 'Modifier les cours',
		'Edit items' => 'Modifier les éléments',
		'Module' => 'Module',
		'SCORM module' => 'Module SCORM',
		'Category name:' => 'Nom de la catégorie :',
		'Page name:' => 'Nom de la page :',
		'Page not found' => 'Page non trouvée',
		'Pages' => 'Pages',
		'Settings' => 'Paramètres',
		'Course settings saved.' => 'Paramètres du cours enregistrés.',
		'Browse' => 'Parcourir',
		'Not yet completed.' => 'Pas encore terminé.',
		'Cover photo (min 480x270)' => 'Photo de couverture (min 480x270)',
		'Private' => 'Privé',
		'Price' => 'Prix',
		'Progress' => 'Progression',
		'Preview' => 'Prévisualisation',
		'Preview page' => 'Prévisualiser la page',
		'Public - Paid' => 'Publique - Payant',
		'Public - Free' => 'Publique - gratuit',
		'Public - Free w/ registration' => 'Publique - gratuit avec enregistrement',
		'Published' => 'Publié',
		'Question' => 'Question',
		'Rename' => 'Renommez',
		'Back' => 'Retour',
		'Answered' => 'Répondu',
		'Correct answer' => 'Réponse correcte',
		'Paragraph answer' => 'Réponse d&apos;un paragraphe',
		'Single-line answer' => 'Réponse d&apos;un seule ligne',
		'Summary' => 'Résumé',
		'Untitled' => 'Sans titre',
		'Saved!' => 'Sauvée!',
		'Submit' => 'Soumettre',
		'Status' => 'Statut',
		'Join this course' => 'Suivre ce cours',
		'Join this course for free' => 'Suivre gratuitement ce cours',
		'Delete' => 'Supprimer',
		'Delete Category' => 'Supprimer la catégorie',
		'Drop down' => 'Sélecteur',
		'Select' => 'Sélectionner',
		'Term' => 'Terme',
		'Done Editing' => 'Terminer les modifications',
		'Complete' => 'Terminé',
		'Text' => 'Texte',
		'Pre-formatted text' => 'Texte préformaté',
		'Title' => 'Titre',
		'Sort Categories' => 'Trier les catégories',
		'Sort items' => 'Trier les éléments',
		'An error occurred' => 'Une erreur est survenue',
		'An error occurred.' => 'Une erreur est survenue.',
		'Click the links to the left to add content to your page.' => 'Utilisez les liens à gauche pour ajouter des contenus à votre page',
		'Please enter a price.' => 'Veuillez saisir un prix.',
		'Please enter a summary.' => 'Veuillez saisir un résumé.',
		'Please enter a title.' => 'Veuillez saisir un titre.',
		'Please enter your message for the instructor' => 'Veuillez saisir votre message pour l&apos;instructeur',
		'Video' => 'Vidéo',
		'Your message has been sent.' => 'Votre message a été envoyé.',
		'Your progress' => 'Votre progression',
		'You answered' => 'Vous avez répondu',
		'right-click to save' => 'clic-droit pour enregistrer',
		'correct' => 'correct',
		'incorrect' => 'incorrect',
		'Are you sure you want to cancel?' => 'Êtes-vous sûr de vouloir annuler?',
		'Are you sure you want to remove this learner from the course?' => 'Êtes-vous sûr de vouloir enlever cet apprenant du cours ?',
		'Are you sure you want to delete this course?' => 'Êtes-vous sûr de vouloir supprimer ce cours ?',
		'Are you sure you want to delete this item?' => 'Êtes-vous sûr de vouloir supprimer cet élément ?',
		'Are you sure you want to delete this category?' => 'Êtes-vous sûr de vouloir supprimer cette catégorie ?',
		'Are you sure you want to delete this page?' => 'Êtes-vous sûr de vouloir supprimer cette page?'
	)
);

?>