<!-- Personal Information Form -->
<form class="form" v-on:submit.prevent="submit">
    <div class="col">
        <div>
            <label for="fname">First Name <em>*</em></label>
            <input type="text" id="fname" v-model="scoreCard.info.first_name" required>
        </div>
        <div>
            <label for="lname">Last Name <em>*</em></label>
            <input type="text" id="lname" v-model="scoreCard.info.last_name" required>
        </div>
        <div>
            <label for="email">Email <em>*</em></label>
            <input type="email" id="email" v-model="scoreCard.info.email" required>
        </div>
        <div>
            <label for="cname">Company Name <em>*</em></label>
            <input type="text" id="cname" v-model="scoreCard.info.company_name" required>
        </div>
        <div>
       <?php     //include('partials/captcha') ?>
        </div>
    </div>
    <div class="col">
        <!-- Pending API Key to be generated from CodeMyViews
        <div class="captcha">
            <span class="dummy">CAPTCHA</span>
        </div>
        -->
        <input type="submit" value="Get your results" class="btn btn-blue">
    </div>
</form>