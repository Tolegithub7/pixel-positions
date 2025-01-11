<?php
use App\Models\Job;
use App\Models\Employer;
// test('example', function () {
//     expect(true)->toBeTrue();
// });
//test === Alias
// test('it belongs to an employer', function () {
//     expect(true)->toBeTrue();
// });
// arrage - arranging the world create the world inorder to run your test
// act - act on the world - perform some kind of action
// assert - assert that the world is in the expected state - what did you expect as a result of that assertion

it('belongs to an employer', function () {
    // Arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id
    ]);
    // Act & Assert
    expect($job->employer->is($employer))->toBeTrue();
});

it('can have tags', function () {
    $job = Job::factory()->create();
    $job->tag('Frontend');
    expect($job->tags)->toHaveCount(1);
});