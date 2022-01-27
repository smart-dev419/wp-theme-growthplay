Vue.component('score-card', {
  name: 'ScoreCard',
  template: '#score-card-tmpl',
  data: function () {
    //TODO: Find better way to pass data in
    var topics = window.scorecard_category_repeater;

    /*Preformatted attributes*/
    var preparedTopics = [];

    for(var i in topics){
      var categories = [];
      var r = topics[i].question_repeater;
      for(var j in r){
        categories.push({
          title: r[j].question_category,
          description: r[j].question_text,
          value: false
        });
      }
      preparedTopics.push({
        title: topics[i].section_title,
        categories: categories,
        scores: [
          {
            min: 3,
            max: 8,
            description: 'It seems like you’re struggling with key aspects of your sales conversation.  If you’d like some help, please read about <a href="/for-b2b/command-of-the-message/" target="_blank">Command of the Message<sup>®</sup></a>.'
          },
          {
            min: 9,
            max: 15,
            description: 'It seems like you’re doing well in some aspects of your sales conversation, but could use some help in others.  For better insight, read about <a href="/for-b2b/command-of-the-message/" target="_blank">Command of the Message<sup>®</sup></a>.'
          },
          {
            min: 16,
            max: 21,
            description: 'It seems like you have a good handle on the way that you’re currently handling your sales conversation.  Keep up the good work.'
          }
        ]
      });
    }
    return {
      maxScore: 7,
      formSubmitted: false,
      error: false,
      scoreCard: {
        info: {
          first_name: '',
          last_name: '',
          email: '',
          company_name: ''
        },
        topics: preparedTopics
      }
    }
  },
  computed: {
    range: function () {
      return Array.apply(null, Array(this.maxScore)).map(function (_, i) {return i;});
    }
  },
  methods: {
    topicClass: function (index) {
      index += 1;
      if (index > 5) {
        index = 1;
      }
      return 'score--blue' + index
    },
    topicScore: function(topic){
      var score = 0;
      jQuery.each(topic.categories, function(index, category){
        score += category.value
      })
      return score;
    },
    topicScoreClass: function(topic){
      var score = this.topicScore(topic)

      if(score >= 16){
        return 'great';
      }else if(score >= 9){
        return 'okay';
      }
      return 'bad';
    },
    printReport: function () {
      window.print();
    },
    topicScoreInfo: function(topic){
      var score = this.topicScore(topic);
      var info = '';
      jQuery.each(topic.scores, function(index, item){
        if(item.min <= score && item.max >= score){
          info = item.description;
        }
      })
      return info;
    },
    submit: function () {
      var $this = this
      var allQuestionsFilledOut = true;
      
      // Loop through topics & categories and ensure each one has an answer.
      // HTML5 form validation will take care of required forms for user info.
      jQuery.each(this.scoreCard.topics, function (tindex, topic) {
        jQuery.each(topic.categories, function (cindex, category) {
            // If one does not, show error
            if (category.value === false) {
              allQuestionsFilledOut = false;
            }
        });
      });
      
      if(!allQuestionsFilledOut) {
        this.error = 'All questions must be answered.';
        return;
      }
      
      // Everything went well if we made it to this point.
      jQuery.ajax({
        url: "/wp-admin/admin-ajax.php?action=scorecard",
        method: "POST",
        data: this.scoreCard,
        dataType: "json"
      }).then(function(response){
        window.scrollTo(0, 0);
        $this.formSubmitted = true;
        jQuery('#score-card-tool .footer').show();
      });
    }
  }
})

//Use this function for testing
function scoreCardFillInTestData(){
  window.setTimeout(function(){
    jQuery('#fname').val('John');
    jQuery('#lname').val('Doe');
    jQuery('#email').val('john@doe.com');
    jQuery('#cname').val('John Doe Inc.');
  }, 100);
  jQuery('.score-table tr .list-col').each(function(){
    jQuery(this).find('li:nth-child(' + ([1,2,3,4,5,6,7][Math.floor(Math.random()*7)])+ ') input').trigger('click');
  });
}