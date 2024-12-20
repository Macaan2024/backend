    <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration
    {
        /**
         * Run the migrations.
         */
        public function up(): void
        {
            Schema::create('subjects', function (Blueprint $table) {
                $table->id();
                $table->string('faculty_name')->nullable();
                $table->integer('units');
                $table->string('description');
                $table->string('subjectCode');
                $table->string('room');
                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            Schema::dropIfExists('subjects');
            // Schema::dropIfExists('users');
        }
    };
