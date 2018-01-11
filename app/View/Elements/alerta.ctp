
<p> </p>
<div data-alert class="alert-box alert round">
    <?php echo utf8_encode($message); ?>
    <a href="#" class="close">&times;</a>
</div>
<script>
    $(document).foundation();
    $(document).foundation('alert', 'reflow');
</script>