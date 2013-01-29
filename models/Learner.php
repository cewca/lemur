<?php

namespace lemur;

use DB;

/**
 * Helpers for learner management.
 */
class Learner {
	/**
	 * Checks if a user is registered for the specified course.
	 * If no user is specified, it will use the current user.
	 */
	public static function in_course ($course, $user = false) {
		$user = $user ? $user : User::val ('id');

		return DB::shift (
			'select count(*) from lemur_learner where user = ? and course = ?',
			$user,
			$course
		);
	}

	/**
	 * Adds a user to a course. If no user is specified, it will
	 * use the current user.
	 */
	public static function add_to_course ($course, $user = false) {
		$user = $user ? $user : User::val ('id');
		
		return DB::execute (
			'insert into lemur_learner values (?, ?, ?)',
			$user,
			$course,
			gmdate ('Y-m-d H:i:s')
		);
	}

	/**
	 * Removes a user from a course. If no user is specified, it will
	 * use the current user.
	 */
	public static function remove_from_course ($course, $user = false) {
		$user = $user ? $user : User::val ('id');
		
		return DB::execute (
			'delete from lemur_learner where user = ? and course = ?',
			$user,
			$course
		);
	}

	/**
	 * Fetches a list of courses a learner currently belongs to.
	 * If no user is specified, it will use the current user.
	 */
	public static function courses ($user = false) {
		$user = $user ? $user : User::val ('id');

		return DB::fetch (
			'select
				lemur_course.*
			from
				lemur_learner, lemur_course
			where
				lemur_learner.user = ? and
				lemur_learner.course = lemur_course.id',
			$user
		);
	}
}

?>