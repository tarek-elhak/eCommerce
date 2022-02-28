<x-layout>
    <x-dashboard-grid>
        <section class="col-span-10">
            <main class="flex justify-center items-center mt-20">
                <x-form.dashboard-form action="/admin/members/store" method="post" header="Add New Member">
                    <x-form.input type="text" name="username" placeholder="Member Name"/>
                    <x-form.input type="text" name="full_name" placeholder="Member Full Name"/>
                    <x-form.input type="email" name="email" placeholder="Member Email"/>
                    <x-form.pass-input/>
                    <x-form.submit name="Add"/>
                </x-form.dashboard-form>
            </main>
        </section>
    </x-dashboard-grid>
</x-layout>
