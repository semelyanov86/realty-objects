<?php

namespace App\Actions;

/**
 * @method static \Lorisleiva\Actions\Decorators\JobDecorator|\Lorisleiva\Actions\Decorators\UniqueJobDecorator makeJob(string $crmid, string $ip, float $rating)
 * @method static \Lorisleiva\Actions\Decorators\UniqueJobDecorator makeUniqueJob(string $crmid, string $ip, float $rating)
 * @method static \Illuminate\Foundation\Bus\PendingDispatch dispatch(string $crmid, string $ip, float $rating)
 * @method static \Illuminate\Foundation\Bus\PendingDispatch|\Illuminate\Support\Fluent dispatchIf(bool $boolean, string $crmid, string $ip, float $rating)
 * @method static \Illuminate\Foundation\Bus\PendingDispatch|\Illuminate\Support\Fluent dispatchUnless(bool $boolean, string $crmid, string $ip, float $rating)
 * @method static dispatchSync(string $crmid, string $ip, float $rating)
 * @method static dispatchNow(string $crmid, string $ip, float $rating)
 * @method static dispatchAfterResponse(string $crmid, string $ip, float $rating)
 * @method static \App\Models\Rating run(string $crmid, string $ip, float $rating)
 */
class CreateRatingForProperty
{
}
/**
 * @method static \Lorisleiva\Actions\Decorators\JobDecorator|\Lorisleiva\Actions\Decorators\UniqueJobDecorator makeJob(string $propertyId)
 * @method static \Lorisleiva\Actions\Decorators\UniqueJobDecorator makeUniqueJob(string $propertyId)
 * @method static \Illuminate\Foundation\Bus\PendingDispatch dispatch(string $propertyId)
 * @method static \Illuminate\Foundation\Bus\PendingDispatch|\Illuminate\Support\Fluent dispatchIf(bool $boolean, string $propertyId)
 * @method static \Illuminate\Foundation\Bus\PendingDispatch|\Illuminate\Support\Fluent dispatchUnless(bool $boolean, string $propertyId)
 * @method static dispatchSync(string $propertyId)
 * @method static dispatchNow(string $propertyId)
 * @method static dispatchAfterResponse(string $propertyId)
 * @method static float run(string $propertyId)
 */
class GetRatingByProperty
{
}
namespace Lorisleiva\Actions\Concerns;

/**
 * @method void asController()
 */
trait AsController
{
}
/**
 * @method void asListener()
 */
trait AsListener
{
}
/**
 * @method void asJob()
 */
trait AsJob
{
}
/**
 * @method void asCommand(\Illuminate\Console\Command $command)
 */
trait AsCommand
{
}