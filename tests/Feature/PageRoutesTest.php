<?php

namespace Tests\Feature;

use Tests\TestCase;

class PageRoutesTest extends TestCase
{
    public function test_home_page_is_accessible(): void
    {
        $response = $this->get(route('home'));

        $response->assertOk();
        $response->assertSee('Будущее');
    }

    public function test_about_page_is_accessible(): void
    {
        $response = $this->get(route('about'));

        $response->assertOk();
        $response->assertSee('О колледже');
    }

    public function test_applicant_page_is_accessible(): void
    {
        $response = $this->get(route('applicant'));

        $response->assertOk();
        $response->assertSee('Абитуриенту');
    }

    public function test_student_page_is_accessible(): void
    {
        $response = $this->get(route('student'));

        $response->assertOk();
        $response->assertSee('Студенту');
    }

    public function test_legacy_html_routes_redirect_correctly(): void
    {
        $this->get('/index.html')->assertRedirect('/');
        $this->get('/about.html')->assertRedirect('/about');
        $this->get('/applicant.html')->assertRedirect('/applicant');
        $this->get('/student.html')->assertRedirect('/student');
    }
}
