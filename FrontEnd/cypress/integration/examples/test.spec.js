/// <reference types="cypress" />

describe('My First Test', () => {
  it('clicking "type" navigates to a new url', () => {
    cy.visit('http://localhost:8080');
    cy.get(".places_sec").contains("Read More").click();
    // Should be on a new URL which includes '/commands/actions'
    cy.url().should('include', 'article.html');
    cy.get('.navbar-brand').click().url().should('include','index.html');

  });
});
