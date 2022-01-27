<script type="text/x-template" id="score-card-tmpl">
    <div>
        <section class="score_board score_board--result" v-if="!formSubmitted">
            @include('partials/score-card/score-card-results')
        </section>
    </div>
</script>
<script type="text/javascript">
    //TODO: Find convenient way to pass data to Vue component
    window.scorecard_category_repeater = <?php echo json_encode(get_field('scorecard_category_repeater'))  ?>;
</script>