@section('title', __('Forms'))

<x-dashboard-layout>

    {{-- Example --}}
    <div class="mb-4">
        <x-title-sm>{{ __('Example') }}</x-title-sm>
    </div>
    <div class="p-4 mb-8 bg-white rounded-md shadow-md dark:bg-gray-800">

        {{-- Input --}}
        <div class="mb-4">
            <div class="mb-2">
                <x-label for="input-example" class="font-semibold">{{ __('Input') }}</x-label>
            </div>
            <x-input type="text" id="input-example" name="input_example" placeholder="{{ __('Input example') }}"></x-input>
        </div>

        {{-- Select --}}
        <div class="mb-4">
            <div class="mb-2">
                <x-label for="select-example" class="font-semibold">{{ __('Select') }}</x-label>
            </div>
            <x-select name="select_example" id="select-example">
                <option value="" selected>{{ __('Select example') }}</option>
                <option value="Option 1">{{ __('Option 1') }}</option>
                <option value="Option 2">{{ __('Option 2') }}</option>
                <option value="Option 3">{{ __('Option 3') }}</option>
            </x-select>
        </div>

        {{-- Text Area --}}
        <div class="mb-4">
            <div class="mb-2">
                <x-label for="text-area-example" class="font-semibold">{{ __('Text Area') }}</x-label>
            </div>
            <x-textarea id="text-area-example" name="text_area_example" placeholder="{{ __('Text area example') }}"></x-textarea>
        </div>

        {{-- Input Checkbox --}}
        <div class="mb-4">
            <div class="mb-2">
                <x-text class="font-semibold">{{ __('Checkbox') }}</x-text>
            </div>
            <div class="flex items-center gap-2">
                <x-input-checkbox id="checkbox-example" name="checkbox_example">{{ __('Checkbox Example') }}</x-input-checkbox>
                <x-label for="checkbox-example">{{ __('Checkbox item') }}</x-label>
            </div>
        </div>

        {{-- Input Radio --}}
        <div class="mb-4">
            <div class="mb-2">
                <x-text class="font-semibold">{{ __('Radio') }}</x-text>
            </div>

            <div class="flex gap-4">
                <span class="flex items-center gap-2">
                    <x-input-radio id="radio-example-1" name="radio_example">{{ __('Radio Example 1') }}</x-input-radio>
                    <x-label for="radio-example-1">{{ __('Radio item 1') }}</x-label>
                </span>
                <span class="flex items-center gap-2">
                    <x-input-radio id="radio-example-2" name="radio_example">{{ __('Radio Example 2') }}</x-input-radio>
                    <x-label for="radio-example-2">{{ __('Radio item 2') }}</x-label>
                </span>
            </div>
        </div>

        {{-- Input File --}}
        <div>
            <div class="mb-2">
                <x-label for="uplaod-file-example" class="font-semibold">{{ __('Upload File') }}</x-label>
            </div>
            <x-input-file id="upload-file-example" name="upload_file_example"></x-input-file>
        </div>
    </div>

    {{-- Disabled --}}
    <div class="mb-4">
        <x-title-sm>{{ __('Disabled') }} </x-title-sm>
    </div>
    <div class="p-4 mb-8 bg-white rounded-md shadow-md dark:bg-gray-800">

        {{-- Input Disabled --}}
        <div class="mb-4">
            <div class="mb-2">
                <x-label for="input-disabled-example" class="font-semibold">{{ __('Input') }}</x-label>
            </div>
            <x-input type="text" id="input-disabled-example" name="input_disabled_example" placeholder="{{ __('Input disabled example') }}" disabled></x-input>
        </div>

        {{-- Select Disabled --}}
        <div class="mb-4">
            <div class="mb-2">
                <x-label for="select-disabled-example" class="font-semibold">{{ __('Select') }}</x-label>
            </div>
            <x-select name="select_disabled_example" id="select-disabled-example" disabled>
                <option value="" selected>{{ __('Select disabled example') }}</option>
                <option value="Option 1">{{ __('Option 1') }}</option>
                <option value="Option 2">{{ __('Option 2') }}</option>
                <option value="Option 3">{{ __('Option 3') }}</option>
            </x-select>
        </div>

        {{-- Text Area Disabled --}}
        <div class="mb-4">
            <div class="mb-2">
                <x-label for="text-area-disabled-example" class="font-semibold" disabled>{{ __('Text Area') }}</x-label>
            </div>
            <x-textarea id="text-area-disabled-example" name="text_area_disabled_example" placeholder="{{ __('Text area disabled example') }}" disabled></x-textarea>
        </div>

        {{-- Input Checkbox Disabled --}}
        <div class="mb-4">
            <div class="mb-2">
                <x-text class="font-semibold">{{ __('Checkbox') }}</x-text>
            </div>
            <div class="flex items-center gap-2">
                <x-input-checkbox id="checkbox-disabled-example" name="checkbox_example" disabled>{{ __('Checkbox Disabled Example') }}</x-input-checkbox>
                <x-label for="checkbox-disabled-example">{{ __('Checkbox item') }}</x-label>
            </div>
        </div>

        {{-- Input Radio Disabled --}}
        <div class="mb-4">
            <div class="mb-2">
                <x-text class="font-semibold">{{ __('Radio') }}</x-text>
            </div>

            <div class="flex gap-4">
                <span class="flex items-center gap-2">
                    <x-input-radio id="radio-disabled-example-1" name="radio_disabled_example" disabled>{{ __('Radio Example 1') }}</x-input-radio>
                    <x-label for="radio-disabled-example-1">{{ __('Radio item 1') }}</x-label>
                </span>
                <span class="flex items-center gap-2">
                    <x-input-radio id="radio-disabled-example-2" name="radio_disabled_example" disabled>{{ __('Radio Example 2') }}</x-input-radio>
                    <x-label for="radio-disabled-example-2">{{ __('Radio item 2') }}</x-label>
                </span>
            </div>
        </div>

        {{-- Input File Disabled --}}
        <div>
            <div class="mb-2">
                <x-label for="uplaod-file-disabled-example" class="font-semibold">{{ __('Upload File') }}</x-label>
            </div>
            <x-input-file id="upload-file-disabled-example" name="upload_file_disabled_example" disabled></x-input-file>
        </div>
    </div>

    {{-- Icons --}}
    <div class="mb-4">
        <x-title-sm>{{ __('Icons') }} </x-title-sm>
    </div>
    <div class="p-4 mb-8 bg-white rounded-md shadow-md dark:bg-gray-800">

        {{-- Left Icon --}}
        <div class="mb-4">
            <div class="mb-2">
                <x-label for="input-left-icon-example" class="font-semibold">{{ __('Left Icon') }}</x-label>
            </div>
            <div class="relative">
                <x-input type="text" id="input-left-icon-example" name="input_left_icon_example" placeholder="{{ __('Input example') }}" class="pl-8"></x-input>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-2 left-2 stroke-gray-500" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <circle cx="12" cy="7" r="4" />
                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                </svg>
            </div>
        </div>

        <!-- Right Icon -->
        <div>
            <div class="mb-2">
                <x-label for="input-right-icon-example" class="font-semibold">{{ __('Left Icon') }}</x-label>
            </div>
            <div class="relative">
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-2 right-2 stroke-gray-500" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <circle cx="12" cy="7" r="4" />
                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                </svg>
                <x-input type="text" id="input-right-icon-example" name="input_right_icon_example" placeholder="{{ __('Input example') }}" class="pr-8"></x-input>
            </div>
        </div>
    </div>

    {{-- Text Validation --}}
    <div class="mb-4">
        <x-title-sm>{{ __('Text Validation') }} </x-title-sm>
    </div>
    <div class="p-4 mb-8 bg-white rounded-md shadow-md dark:bg-gray-800">

        <!-- Valid Input -->
        <div class="mb-4">
            <div class="mb-2">
                <x-label for="input-valid-example" class="font-semibold">{{ __('Valid Input') }}</x-label>
            </div>
            <x-input type="text" id="input-valid-example" name="input_valid_example" placeholder="{{ __('Input valid example') }}"></x-input>
            <x-text-valid>{{ __('Input is valid.') }}</x-text-valid>
        </div>

        <!-- Invalid Input -->
        <div class="mb-4">
            <div class="mb-2">
                <x-label for="input-invalid-example" class="font-semibold">{{ __('Invalid Input') }}</x-label>
            </div>
            <x-input type="text" id="input-invalid-example" name="input_invalid_example" placeholder="{{ __('Input invalid example') }}"></x-input>
            <x-text-invalid>{{ __('Input is invalid.') }}</x-text-invalid>
        </div>
        </div>
    </div>


</x-dashboard-layout>