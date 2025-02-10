<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cakes;
use App\Models\Categories;

use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Text;
use MoonShine\Fields\Field;
use MoonShine\Fields\Number;
use MoonShine\Fields\Image;
use MoonShine\Fields\File;
use MoonShine\Fields\Select;
use MoonShine\Components\MoonShineComponent;
use MoonShine\Fields\Textarea;
use MoonShine\Resources\CategoriesResource;

/**
 * @extends ModelResource<Cakes>
 */
class CakesResource extends ModelResource
{
    protected string $model = Cakes::class;

    protected string $title = 'Cakes';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        $categoryArrays = Categories::select('id', 'name')->get(); // get value in database
        $categories = $categoryArrays->toArray(); // convert to array
        $idCategory = array_column($categories, 'id'); // get value id 
        $nameCategory = array_column($categories, 'name'); // get value name
        $categoriesResult = array_combine($idCategory, $nameCategory); // combine id and name to new array
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Name', 'name')->required(),
                Number::make('Price', 'price')->required(),
                File::make('Images', 'images')->required()
                    ->dir('/')
                    ->disk('public')
                    ->allowedExtensions(['jpg', 'gif', 'png']),
                Textarea::make('Description', 'description')->required(),
                Select::make('Categories', 'category_id')->options($categoriesResult)->required(),
            ]),
        ];
    }

    /**
     * @param Cakes $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [
            'images' => ['required',]
        ];
    }
}
