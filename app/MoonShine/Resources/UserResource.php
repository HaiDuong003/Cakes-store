<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Text;
use MoonShine\Fields\Field;
use MoonShine\Fields\Email;
use MoonShine\Fields\Password;
use MoonShine\Fields\File;
use MoonShine\Fields\Phone;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<User>
 */
class UserResource extends ModelResource
{
    protected string $model = User::class;

    protected string $title = 'User';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('User Name', 'name')->required(),
                Email::make('Email', 'email')->required(),
                Password::make('Password', 'password')->required(),
                Text::make('Address', 'address')->required(),
                Phone::make('Phone Number', 'phone_number')->required(),
                File::make('Avatar', 'avatar')->required()
                    ->dir('/')
                    ->disk('public')
                    ->allowedExtensions(['jpg', 'gif', 'png']),
            ]),
        ];
    }

    /**
     * @param User $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
