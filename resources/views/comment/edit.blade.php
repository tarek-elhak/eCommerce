<x-layout title="Edit Comment">
    <x-dashboard-grid>
        <section class="col-span-10 mt-10">
            <x-form.dashboard-form header="Edit Comment"
                                   action="/admin/comments/update/{{$comment->id}}"
                                   method="put"
            >
                <x-form.textarea name="body" value="{!! $comment->body !!}"/>
                <x-form.checkbox-input content="Approve" name="is_approved" check="{{$comment->is_approved}}" />
                <x-form.submit name="Update" />
            </x-form.dashboard-form>
        </section>
    </x-dashboard-grid>
</x-layout>
