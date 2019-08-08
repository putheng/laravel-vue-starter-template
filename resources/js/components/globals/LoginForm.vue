<template>
	<app-form class="auth-form" action="/api/login">
        <!-- .form-group -->
        <state-input name="email" label="Email"/>
        <!-- /.form-group -->

        <!-- .form-group -->
        <state-input name="password" label="Password" type="password"/>
        <!-- /.form-group -->

        <!-- .form-group -->
        <login-button type="submit"/>
        <!-- /.form-group -->
      </app-form>
</template>

<script>

	export default {

	}
</script>