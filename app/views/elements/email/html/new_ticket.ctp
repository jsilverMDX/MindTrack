<p>Hello, <?= $to_name ?></p>

<? $t_link = Router::url('/', true).'t'.$t_id ?>
<?= $this->Html->link($t_link, $t_link); ?>

<p><?= $author ?> posted a new ticket to <?= $project_name ?></p>

<h1><?= $ticket_name ?></h1>

<p>"<?= $description ?>"</p>

<p>posted <?= $this->Time->timeAgoInWords($timestamps); ?></p>

Thanks, Mindy the Mindbot!
