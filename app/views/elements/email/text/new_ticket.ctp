Hello, <?= $to_name ?>

<? $t_link = Router::url('/', true).'t'.$t_id ?>
<?= $this->Html->link($t_link, $t_link); ?>

<?= $author ?> posted a new ticket to <?= $project_name ?>

<?= $ticket_name ?>

"<?= $description ?>"

posted <?= $this->Time->timeAgoInWords($timestamps); ?>

Thanks, Mindy the Mindbot!
