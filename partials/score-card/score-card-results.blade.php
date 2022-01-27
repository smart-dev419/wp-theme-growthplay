
    <header class="heading">
        <a href="#" v-on:click.prevent="printReport"class="print">Print <i class="icon-print"></i></a>
        <h1>Your Roadmap</h1>
    </header>
    <div class="score_result"
         :class="topicClass($index)"
         v-for="(topic, $index) in scoreCard.topics">
        <h3 class="score-title" v-html="topic.title"></h3>
        <div class="score-body">
            <div class="score-img">
                @include('partials/score-card/svg')
                <strong class="score-txt">
                    <span v-html="topicScore(topic)"></span><span>/21</span>
                </strong>
            </div>
            <div class="score-desc" v-html="topicScoreInfo(topic)"></div>
        </div>
    </div>
