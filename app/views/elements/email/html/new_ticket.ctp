<p>Hello, <?= $to_name ?></p>

<p><?= $author ?> posted a new ticket to <?= $project_name ?></p>

<h1><?= $ticket_name ?></h1>

<p>"<?= $description ?>"</p>

<p>posted <?= $this->Time->timeAgoInWords($timestamps); ?></p>

Thanks, Mindy the Mindbot!
