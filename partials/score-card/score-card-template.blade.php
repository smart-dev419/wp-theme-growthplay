<script type="text/x-template" id="score-card-tmpl">
    <div>
        <section class="score_board score_board--result" v-if="formSubmitted">
       @include('partials/score-card/score-card-results')
            </section>
        <div v-if="!formSubmitted">
            <div class="text-col">
                <div class="col">
                    <h1>{{get_field('section_1_header')}}</h1>
                </div>
                <div class="col">
                    <div>
                        {{get_field('section_1_paragraph_copy')}}
                    </div>
                    <div class="def">
                        <div class="def-title">{{get_field('section_1_bulleted_list_title')}}</div>
                        <?php $scoring_bullet_points = get_field('section_1_scoring_bullet_point_repeater');  ?>
                        <div class="def-body">
                            <ul class="list-unstyled">
                                    @if($scoring_bullet_points && sizeof($scoring_bullet_points) > 0)
                                        @foreach($scoring_bullet_points as $item)
                                                <li>{{$item['bullet_point_text']}}</li>
                                            @endforeach
                                    @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                   // print_r(get_field('scorecard_category_repeater'));
            ?>
            <!-- Score Card -->
            <div class="score_board">
                <div class="score"
                     :class="topicClass($index)"
                     v-for="(topic, $index) in scoreCard.topics">
                    <h3 class="score-title" v-html="topic.title"></h3>
                    <table class="score-table">
                        <tr v-for="category in topic.categories">
                            <td v-html="category.title"></td>
                            <td v-html="category.description"></td>
                            <td>
                                <ol class="list-col">
                                    <li v-for="item in range">
                                        <label class="nice-form">
                                            <input type="radio" :name="category.title" :value="item+1" v-model="category.value" required>
                                            <span class="fake-input"></span>
                                        </label>
                                    </li>
                                </ol>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="score-error card card--red" v-if="error">
                <div class="content">All questions must be answered.</div>
            </div>
            @include('partials/score-card/personal-information-form')
        </div>
    </div>
</script>
<script type="text/javascript">
    //TODO: Find convenient way to pass data to Vue component
    window.scorecard_category_repeater = <?php echo json_encode(get_field('scorecard_category_repeater'))  ?>;
</script>