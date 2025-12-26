import { describe, expect, it } from 'vitest';

describe('Example Test Suite', () => {
    it('should pass a basic assertion', () => {
        expect(1 + 1).toBe(2);
    });

    it('should work with arrays', () => {
        const items = ['apple', 'banana', 'cherry'];
        expect(items).toHaveLength(3);
        expect(items).toContain('banana');
    });

    it('should work with objects', () => {
        const user = { name: 'John', age: 30 };
        expect(user).toHaveProperty('name');
        expect(user.name).toBe('John');
    });
});
