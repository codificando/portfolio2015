<div data-alert class="alert-box success radius">
    <?php echo utf8_encode($message); ?>
    <a href="#" class="close">&times;</a>
</div>
<script>
    $(document).foundation();
    $(document).foundation('alert', 'reflow');
</script>