Hello, <?= $to_name ?>

<?= $author ?> posted a new ticket to <?= $project_name ?>

<?= $ticket_name ?>

"<?= $description ?>"

posted <?= $this->Time->timeAgoInWords($timestamps); ?>

Thanks, Mindy the Mindbot!
