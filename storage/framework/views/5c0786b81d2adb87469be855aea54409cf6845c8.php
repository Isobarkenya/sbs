
<section class="bg-white skill-selection">
<div class="text-center block-title">
<h2>What would be your ideal one more skill?</h2>
<?php echo $__env->make('blog.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo Form::open(['method' => 'POST', 'route' => 'contactSend',  'class' => 'contact-form form-skills', 'id' => 'contact_form', 'role' => 'form', 'enctype' => 'multipart/form-data' ]); ?>

    <?php echo csrf_field(); ?>

    <input type="hidden" name="_method" value="POST">
    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
    <meta name="_token" content="<?php echo csrf_token(); ?>" />

			<div class="row justify-content-center">
				<div class="input-contol col-sm-3">
					<select name="division">
						<option value="">Select Division</option>
						<option value="Marketing">Marketing</option>
						<option value="EBU">EBU</option>
						<option value="CBU">CBU</option>
						<option value="legal">legal</option>
					</select>
				</div>
				<div class="input-contol col-sm-3">
					<select name="band">
						<option  value="">select Band</option>
						<option value="E">E</option>
						<option value="F">F</option>
						<option value="I">I</option>
						<option value="H">H</option>
					</select>
				</div>
				<div class="input-contol col-sm-3">
					<select name="skill">
						<option  value="">Select skill</option>
						<option value="Digital Sales">Digital Sales</option>
						<option value="5G">5G</option>
						<option value="Cloud Computing">Cloud Computing</option>
						<option value="AI">AI</option>
					</select>
				</div>
				<button class="btn btn-primary submit col-sm-2">Submit</button>
			</div>
			<?php echo Form::close(); ?>

		</div>

</section>
<?php /**PATH /Applications/MAMP/htdocs/larablog-master/resources/views/blog/forms/contact-form.blade.php ENDPATH**/ ?>