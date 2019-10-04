@component('mail::message')
# {{ trans('mail.hello') }} {{ $target->present()->fullName() }},

{{ trans('mail.the_following_item') }}

@if ($item->getImageUrl())
<center><img src="{{ $item->getImageUrl() }}" alt="Asset" style="max-width: 570px;"></center>
@endif

@component('mail::table')
|        |          |
| ------------- | ------------- |
@if ((isset($item->name)) && ($item->name!=''))
| **{{ trans('mail.asset_name') }}** | {{ $item->name }} |
@endif
| **{{ trans('mail.asset_tag') }}** | {{ $item->asset_tag }} |
@if (isset($item->manufacturer))
| **{{ trans('general.manufacturer') }}** | {{ $item->manufacturer->name }} |
@endif
@if (isset($item->model))
| **{{ trans('general.asset_model') }}** | {{ $item->model->name }} |
@endif
@if (isset($item->model_no))
| **{{ trans('general.model_no') }}** | {{ $item->model_no }} |
@endif
@if (isset($item->serial))
| **{{ trans('mail.serial') }}** | {{ $item->serial }} |
@endif
@if (isset($last_checkout))
| **{{ trans('mail.checkout_date') }}** | {{ $last_checkout }} |
@endif
@foreach($fields as $field)
@if (($item->{ $field->db_column_name() }!='') && ($field->show_in_email) && ($field->field_encrypted=='0'))
| **{{ $field->name }}** | {{ $item->{ $field->db_column_name() } }} |
@endif
@endforeach
@if ($admin)
| **{{ trans('general.administrator') }}** | {{ $admin->present()->fullName() }} |
@endif
@if ($note)
| **{{ trans('mail.additional_notes') }}** | {{ $note }} |
@endif
@endcomponent

Muchas Gracias,

{{ $snipeSettings->site_name }}

@endcomponent
