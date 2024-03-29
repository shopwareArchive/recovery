<?php declare(strict_types=1);

/**
 * @package system-settings
 */
return [
    'title' => 'Shopware 6 - Update Script',
    'meta_text' => '<strong>Aggiornamento Shopware:</strong>',
    'tab_start' => 'Avvia aggiornamento',
    'tab_check' => 'Requisiti di sistema',
    'tab_migration' => 'Migrazione database',
    'tab_cleanup' => 'Elimina',
    'tab_done' => 'Finito',
    'start_update' => 'Avvia aggiornamento',
    'configuration' => 'Configurazione',
    'back' => 'Indietro',
    'forward' => 'Avanti',
    'start' => 'Avvia',
    'select_language' => 'Seleziona lingua',
    'select_language_choose' => 'Si prega di selezionare',

    'select_language_de' => 'Tedesco',
    'select_language_en' => 'Inglese',
    'select_language_nl' => 'Olandese',
    'select_language_it' => 'Italiano',
    'select_language_fr' => 'Francese',
    'select_language_es' => 'Spagnolo',
    'select_language_pt' => 'Portoghese',
    'select_language_pl' => 'Polacco',
    'select_language_cs' => 'Ceco',
    'select_language_sv' => 'Svedese',

    'noaccess_title' => 'Accesso negato',
    'noaccess_info' => 'Inserire l’indirizzo IP "<strong>%s</strong>" del file <strong>%s</strong>.',
    'step2_header_files' => 'File e directory',
    'step2_files_info' => 'I seguenti file e directory devono essere presenti e possedere accesso in scrittura',
    'step2_files_delete_info' => 'Le seguenti directory devono essere <strong>cancellate</strong>.',
    'step2_error' => 'Alcuni requisiti non sono soddisfatti',
    'step2_php_info' => 'Il server deve disporre dei seguenti requisiti di sistema perché Shopware possa funzionare',
    'step2_system_colcheck' => 'Requisito',
    'step2_system_colrequired' => 'Necessario',
    'step2_system_colfound' => 'Il tuo sistema',
    'step2_system_colstatus' => 'Stato',
    'migration_progress_text' => 'Avviare l’aggiornamento del database con un clic sul tasto “Avvia”',
    'migration_header' => 'Eseguire l’aggiornamento del database',
    'migration_counter_text_migrations' => 'Aggiornamento database in corso',
    'migration_counter_text_snippets' => 'Aggiornamento moduli di testo in corso',
    'migration_counter_text_unpack' => 'Sovrascrizione file in corso',
    'migration_update_success' => 'Aggiornamento riuscito',
    'cleanup_header' => 'Elimina',
    'cleanup_dir_table_header' => 'Directory / File',
    'cleanup_disclaimer' => 'I seguenti file appartengono a una versione precedente di Shopware e non saranno più necessari dopo l’aggiornamento. Premere “Avanti" per cancellare automaticamente i file e concludere l’aggiornamento. Consigliamo di creare prima un backup. <strong>A seconda della quantità di file da rimuovere, il processo può richiedere del tempo.</strong>',
    'cleanup_error' => 'Non è stato possibile cancellare i seguenti file. Si prega di cancellarli a mano o di assicurarsi che il server web disponga dei diritti per cancellarli. Premere “Avanti" per proseguire il processo di aggiornamento.',
    'done_title' => 'Aggiornamento riuscito!',
    'done_info' => 'Installazione Shopware aggiornata con successo.',
    'done_delete' => '<strong>Il tuo shop si trova attualmente in modalità manutenzione.</strong><br/>Clicca su “Concludi aggiornamento" oppure cancella la cartella "/update-assets" manualmente per concludere l’aggiornamento.',
    'done_frontend' => 'Vai allo storefront',
    'done_backend' => 'Vai alla gestione',
    'deleted_files' => '&nbsp;file rimossi da %d directory',
    'cache_clear_error' => 'Si è verificato un errore. Cancella manualmente la cache dopo l’aggiornamento.',
    'finish_update' => 'Chiudi aggiornamento',
    'version' => 'Version',
];
