<x-layout>
    <x-dashboard-grid>
        <section class="col-span-10">
            <main class="flex justify-center items-center mt-20">
                <x-dashboard-form action="/admin/members/store" method="post" header="Add New Member">
                    <x-dashboard-form-input type="text" name="username" placeholder="Member Name"/>
                    <x-dashboard-form-input type="text" name="full_name" placeholder="Member Full Name"/>
                    <x-dashboard-form-input type="email" name="email" placeholder="Member Email"/>
                    <x-dashboard-form-pass-input/>
                    <x-dashboard-form-submit-input name="Add"/>
                </x-dashboard-form>
            </main>
        </section>
    </x-dashboard-grid>
</x-layout>
