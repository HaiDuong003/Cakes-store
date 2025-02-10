<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Coupons;

use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Fields\Text;
use MoonShine\Fields\Number;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<Coupons>
 */
class CouponsResource extends ModelResource
{
    protected string $model = Coupons::class;

    protected string $title = 'Coupons';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Code', 'code')->required(),
                Number::make('Value (%)', 'value')->required()->min(1)->max(100),
            ]),
        ];
    }

    /**
     * @param Coupons $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
