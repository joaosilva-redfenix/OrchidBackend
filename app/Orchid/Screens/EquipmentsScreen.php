<?php

declare(strict_types=1);

namespace App\Orchid\Screens;

use App\Models\Equipment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Orchid\Screen\Layout;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Link;
use App\Orchid\Layouts\EquipmentListLayout;
use Orchid\Screen\Fields\TD as TDField;

class EquipmentsScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Equipments';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        $userGroup = DB::table('user__groups')
            ->where('user_id', Auth::user()->id)
            ->join('groups', 'user__groups.group_id', '=', 'groups.id')
            ->select('groups.name', 'groups.id')
            ->first();

        $equipments = Equipment::where('group_id', $userGroup->id)->get();

        return [
            'equipments' => $equipments,
        ];
    }

    /**
     * Get the table fields for the screen.
     *
     * @return array
     */
    protected function fields(): array
    {
        return [
        ];
    }

    /**
     * Set the layout for the screen.
     *
     * @return array
     */
    public function layout(): array
{
    return [
        EquipmentListLayout::class
    ];
}

}