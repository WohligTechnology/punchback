<div class="row">
<div class="col s12">
<h4 class="pad-left-15 capitalize">Create review</h4>
</div>
<form class='col s12' method='post' action='<?php echo site_url("site/createreviewsubmit");?>' enctype= 'multipart/form-data'>
<div class="row">
<div class="input-field col s6">
<label for="duration">How often do you plan Team Outings/ Get-Together?</label>
<input type="text" id="duration" name="duration" value='<?php echo set_value('duration');?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="teamsize">What is the Average Team Size for the Team Outings/ Get-Together?</label>
<input type="text" id="teamsize" name="teamsize" value='<?php echo set_value('teamsize');?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="lastlocation">Where did you host your last Team Get-Together?</label>
<input type="text" id="lastlocation" name="lastlocation" value='<?php echo set_value('lastlocation');?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="nextlocation">When are you planning to host your next event?</label>
<input type="text" id="nextlocation" name="nextlocation" value='<?php echo set_value('nextlocation');?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="knowssmash">Have you heard about Smaaash Entertainment?</label>
<input type="text" id="knowssmash" name="knowssmash" value='<?php echo set_value('knowssmash');?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="hostwithsmash">Would you like to host you next Team Outing / Party at Smaaash?</label>
<input type="text" id="hostwithsmash" name="hostwithsmash" value='<?php echo set_value('hostwithsmash');?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="name">Name</label>
<input type="text" id="name" name="name" value='<?php echo set_value('name');?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="email">Email</label>
<input type="text" id="email" name="email" value='<?php echo set_value('email');?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="phone">Phone</label>
<input type="text" id="phone" name="phone" value='<?php echo set_value('phone');?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="designation">Designation</label>
<input type="text" id="designation" name="designation" value='<?php echo set_value('designation');?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="organization">Organization</label>
<input type="text" id="organization" name="organization" value='<?php echo set_value('organization');?>'>
</div>
</div>
<div class="row">
<div class="col s12 m6">
<button type="submit" class="btn btn-primary waves-effect waves-light blue darken-4">Save</button>
<a href="<?php echo site_url("site/viewreview"); ?>" class="btn btn-secondary waves-effect waves-light red">Cancel</a>
</div>
</div>
</form>
</div>
