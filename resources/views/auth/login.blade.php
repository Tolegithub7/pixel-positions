<x-layout>
    <x-page-heading> Login </x-page-heading>
    <x-forms.form method="POST" action="/login">
        <x-forms.input label='Email' name='email' type='email' placeholder='bruno@gmail.com' />
        <x-forms.input label='Password' name='password' type='password' placeholder='********' />

        <x-forms.divider />

        <x-forms.button> Login </x-forms.button>
    </x-forms.form>
</x-layout>